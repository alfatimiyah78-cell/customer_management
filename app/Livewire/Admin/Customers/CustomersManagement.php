<?php

namespace App\Livewire\Admin\Customers;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

class CustomersManagement extends Component
{
    use WithPagination;
    //Short by
    public $sortField = 'full_name';
    public $sortDirection = 'asc';
    protected $queryString = ['sortField', 'sortDirection'];

    //Search
    public $search_name_or_email = '';
    public $search_address = '';
    public $search_gender = '';
    // public $search_with_paket = '';
   // public $search_with_status_customer_paket = '';
    //public $search_with_internet_service = '';
    // public $selectedServer;
    public $selectedUser = [];
    //public $selectAll = false;
    // public $selectAll;
    //public $selectAll = [];
    // Pagination
    public $checkAll;
    public $perPage = 25;

    //dispatch
    public $alert_title, $alert_message;

    public $first_name, $last_name, $address, $email, $phone;
    public $state = [];

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection == 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }
        $this->sortField = $field;
    }

     public function updatedSearchAddress()
    {
        $this->resetPage();
    }

    public function updatedSearchNameOrEmail()
    {
        $this->resetPage();
    }

    public function updatedSearchGender()
    {
        $this->resetPage();
    }

    /**
     * Alert when user successfully disable or enable
     */
    #[On('user-disable')]
    public function alert($model)
    {
        $model = User::find($model['id']);
        if ($model->disabled) {
            $this->alert_title = trans('user.alert.disable-successfully');
            $this->alert_message = trans('user.alert.user-disable', ['user' => $model->full_name]);
        } else {
            $this->alert_title = trans('user.alert.enable-successfully');
            $this->alert_message = trans('user.alert.user-enable', ['user' => $model->full_name]);
        }
        $this->dispatch('updated');
    }

    /**
     * Export all user
     */
    public function exportUser()
    {
        //  return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function verificationUser(User $user)
    {
        $user->activation();
        LivewireAlert::title(trans('customer.alert.success'))
            ->text(trans('customer.alert.verification-user-successfully', ['user' => $user->full_name]))
            ->position('top-end')
            ->toast()
            ->status('success')
            ->show();
    }

    #[On('notification-user-disable')]
    public function notification($model)
    {
        LivewireAlert::title(trans('user.alert.user-created'))
            ->text(trans('user.alert.user-created-successfully', ['user' => $model['first_name']]))
            ->position('top-end')
            ->toast()
            ->status('success')
            ->show();
    }

    public function bulkDelete()
    {
        $this->dispatch('bulk-delete-customer-modal', userSelected: $this->selectedUser);
    }

    public function bulkEdit()
    {
       // dd($this->selectedUser);
        $this->dispatch('bulk-edit-customer-modal', userSelected: $this->selectedUser);
    }

   /* public function updatedSelectAll($value)
    {
      // dd($value);
        if($value){
            $this->selectedUser = json_decode($this->getCustomers()->pluck('id'), true);
        } else {
            $this->selectedUser = [];
        }
         //$selectedUser = $this->getCustomers()->pluck('id');
            //$merged = collect($this->selectedUser)->merge($selectedUser);
            //$this->selectedUser = json_decode(collect($merged->all()), true);

    }
*/
    #[On('refresh-selected-users')]
    public function refreshSelectedCustomerPaket()
    {
        $this->selectedUser = [];
        $this->checkAll = false;
    }

    private function getCustomers()
    {
        return User::select("id", "first_name", "last_name", DB::raw("CONCAT(users.first_name,' ',COALESCE(users.last_name, '')) as full_name"), "email", "username", "email_verified_at", "disabled")
            ->when($this->search_name_or_email, function ($builder) {
                //$this->resetPage();
                $builder->where(function ($builder) {
                    $sql = "CONCAT(users.first_name,' ',COALESCE(users.last_name,''))  like ?";
                    $builder->whereRaw($sql,  "%" . $this->search_name_or_email . "%")
                        ->orWhere('email', 'like', '%' . $this->search_name_or_email . '%');
                });
            })
            ->with('user_customer')
            ->whereHas('user_customer', function ($builder) {
                $builder->when($this->search_gender, function ($builder) {
                    //$this->resetPage();
                    $builder->where(function ($builder) {
                        $builder->where('gender', $this->search_gender);
                    });
                });
            })
            ->with('user_address')
            ->whereHas('user_address', function ($builder) {
                $builder->when($this->search_address, function ($builder) {
                    //$this->resetPage();
                    $builder->where('address', 'like', '%' . $this->search_address . '%')
                        ->orWhere('phone', 'like', '%' . $this->search_address . '%');
                });
            })
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate($this->perPage);
    }

    #[On('refresh-customer-list')]
    public function render()
    {
        //if($this->selectedUser) $this->selectedUser = true;
        /*$customers = User::select("id", "first_name", "last_name", DB::raw("CONCAT(users.first_name,' ',COALESCE(users.last_name, '')) as full_name"), "email", "username", "email_verified_at", "disabled")
            ->when($this->search_name_or_email, function ($builder) {
                $this->resetPage();
                $builder->where(function ($builder) {
                    $sql = "CONCAT(users.first_name,' ',COALESCE(users.last_name,''))  like ?";
                    $builder->whereRaw($sql,  "%" . $this->search_name_or_email . "%")
                        ->orWhere('email', 'like', '%' . $this->search_name_or_email . '%');
                });
            })
            ->with('user_customer')
            ->whereHas('user_customer', function ($builder) {
                $builder->when($this->search_gender, function ($builder) {
                    $this->resetPage();
                    $builder->where(function ($builder) {
                        $builder->where('gender', $this->search_gender);
                    });
                });
            })
            ->with('user_address')
            ->whereHas('user_address', function ($builder) {
                $builder->when($this->search_address, function ($builder) {
                    $this->resetPage();
                    $builder->where('address', 'like', '%' . $this->search_address . '%')
                        ->orWhere('phone', 'like', '%' . $this->search_address . '%');
                });
            })
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate($this->perPage);*/
            $customers = $this->getCustomers();

       // $this->resultUser = $customers->pluck('id');
       // dd($this->resultUser);
      // if ($this->selectAll){
      //      $this->selectedUser = $customers->pluck('id');
     //  } else {
     //       $this->selectedUser = [];
     //  }

        return view('livewire.admin.customers.customers-management', [
            'customers' => $customers
        ])->layout('components.layouts.app', ['title' => trans('system.title.customers')]);
    }
}
