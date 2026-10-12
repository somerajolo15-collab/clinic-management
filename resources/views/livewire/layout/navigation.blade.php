
<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
};
?>

<aside class="fixed inset-y-0 left-0 z-40 flex w-64 flex-col overflow-y-auto border-r border-gray-200 bg-white">
    <div class="border-b border-gray-200 px-5 py-6">
        <a href="{{ route('dashboard') }}" class="text-lg font-bold text-gray-800">
            Clinic Management System
        </a>
    </div>

    <nav class="flex-1 space-y-5 px-4 py-5">
        <div>
            <a href="{{ route('dashboard') }}"
               class="block rounded-md bg-gray-100 px-3 py-2 text-sm font-semibold text-gray-900">
                Dashboard
            </a>
        </div>

        <div>
            <h2 class="mb-2 px-3 text-xs font-semibold uppercase tracking-wider text-gray-500">
                PATIENT CARE
            </h2>
            <div class="space-y-1 text-sm text-gray-700">
                <div class="rounded-md px-3 py-2">Patients</div>
                <div class="rounded-md px-3 py-2">Appointments</div>
                <div class="rounded-md px-3 py-2">Encounters</div>
                <div class="rounded-md px-3 py-2">Medical Records</div>
            </div>
        </div>

        <div>
            <h2 class="mb-2 px-3 text-xs font-semibold uppercase tracking-wider text-gray-500">
                CLINICAL
            </h2>
            <div class="space-y-1 text-sm text-gray-700">
                <div class="rounded-md px-3 py-2">Prescriptions</div>
                <div class="rounded-md px-3 py-2">Laboratory</div>
                <div class="rounded-md px-3 py-2">Referrals</div>
            </div>
        </div>

        <div>
            <h2 class="mb-2 px-3 text-xs font-semibold uppercase tracking-wider text-gray-500">
                OPERATIONS
            </h2>
            <div class="space-y-1 text-sm text-gray-700">
                <div class="rounded-md px-3 py-2">Billing</div>
                <div class="rounded-md px-3 py-2">Pharmacy</div>
                <div class="rounded-md px-3 py-2">Inventory</div>
            </div>
        </div>

        <div>
            <h2 class="mb-2 px-3 text-xs font-semibold uppercase tracking-wider text-gray-500">
                REPORTS
            </h2>
            <div class="space-y-1 text-sm text-gray-700">
                <div class="rounded-md px-3 py-2">Patient Reports</div>
                <div class="rounded-md px-3 py-2">Clinical Reports</div>
                <div class="rounded-md px-3 py-2">Financial Reports</div>
            </div>
        </div>

        <div>
            <h2 class="mb-2 px-3 text-xs font-semibold uppercase tracking-wider text-gray-500">
                ADMINISTRATION
            </h2>
            <div class="space-y-1 text-sm text-gray-700">
                <div class="rounded-md px-3 py-2">Users</div>
                <div class="rounded-md px-3 py-2">Roles &amp; Permissions</div>
                <div class="rounded-md px-3 py-2">Clinic Settings</div>
                <div class="rounded-md px-3 py-2">Audit Logs</div>
            </div>
        </div>
    </nav>

    <div class="border-t border-gray-200 px-4 py-4">
        @auth
            <p class="mb-3 truncate text-sm font-medium text-gray-800">
                {{ auth()->user()->name }}
            </p>

            <a href="{{ route('profile') }}"
               class="mb-2 block rounded-md px-3 py-2 text-sm text-gray-700 hover:bg-gray-100">
                Profile
            </a>

            <button
                type="button"
                wire:click="logout"
                class="w-full rounded-md px-3 py-2 text-left text-sm text-red-600 hover:bg-red-50"
            >
                Log Out
            </button>
        @endauth
    </div>
</aside>
