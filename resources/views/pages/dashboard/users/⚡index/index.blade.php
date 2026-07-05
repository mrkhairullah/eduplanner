<flux:main>
    <flux:breadcrumbs class="mb-4">
        <flux:breadcrumbs.item href="{{ route('dashboard.overview') }}" separator="slash">
            Dasbor
        </flux:breadcrumbs.item>
        <flux:breadcrumbs.item separator="slash">
            Pengguna
        </flux:breadcrumbs.item>
    </flux:breadcrumbs>

    <flux:heading size="xl" level="1">
        Daftar Pengguna
    </flux:heading>

    <flux:text class="mb-6 mt-2 text-base">
        Berikut adalah daftar pengguna yang terdaftar dalam sistem. Anda dapat menambahkan, mengubah, atau menghapus
        pengguna sesuai kebutuhan.
    </flux:text>

    <flux:table :paginate="$this->users">
        <flux:table.columns>
            <flux:table.column sortable :sorted="$sortBy === 'name'" :direction="$sortDirection"
                               wire:click="sort('name')">
                Nama
            </flux:table.column>
            <flux:table.column sortable :sorted="$sortBy === 'username'" :direction="$sortDirection"
                               wire:click="sort('username')">
                Nama Pengguna
            </flux:table.column>
            <flux:table.column sortable :sorted="$sortBy === 'email'" :direction="$sortDirection"
                               wire:click="sort('email')">
                Email
            </flux:table.column>
            <flux:table.column sortable :sorted="$sortBy === 'gender'" :direction="$sortDirection"
                               wire:click="sort('gender')">
                Kelamin
            </flux:table.column>
            <flux:table.column sortable :sorted="$sortBy === 'religion'" :direction="$sortDirection"
                               wire:click="sort('religion')">
                Agama
            </flux:table.column>
            <flux:table.column sortable :sorted="$sortBy === 'birth_place'" :direction="$sortDirection"
                               wire:click="sort('birth_place')">
                Tempat Lahir
            </flux:table.column>
            <flux:table.column sortable :sorted="$sortBy === 'birth_date'" :direction="$sortDirection"
                               wire:click="sort('birth_date')">
                Tanggal Lahir
            </flux:table.column>
            <flux:table.column sortable :sorted="$sortBy === 'entry_month'" :direction="$sortDirection"
                               wire:click="sort('entry_month')">
                Bulan Masuk
            </flux:table.column>
            <flux:table.column sortable :sorted="$sortBy === 'entry_year'" :direction="$sortDirection"
                               wire:click="sort('entry_year')">
                Tahun Masuk
            </flux:table.column>
            <flux:table.column sortable :sorted="$sortBy === 'email_verified_at'" :direction="$sortDirection"
                               wire:click="sort('email_verified_at')">
                Email Diverifikasi Pada
            </flux:table.column>
            <flux:table.column sortable :sorted="$sortBy === 'updated_at'" :direction="$sortDirection"
                               wire:click="sort('updated_at')">
                Diperbarui Pada
            </flux:table.column>
            <flux:table.column sortable :sorted="$sortBy === 'created_at'" :direction="$sortDirection"
                               wire:click="sort('created_at')">
                Ditambahkan Pada
            </flux:table.column>
        </flux:table.columns>

        <flux:table.rows>
            @foreach ($this->users as $user)
                <flux:table.row :key="$user->id">
                    <flux:table.cell>
                        {{ $user->name }}
                    </flux:table.cell>
                    <flux:table.cell>
                        {{ $user->username }}
                    </flux:table.cell>
                    <flux:table.cell>
                        {{ $user->email }}
                    </flux:table.cell>
                    <flux:table.cell>
                        {{ $user->gender ?? '-' }}
                    </flux:table.cell>
                    <flux:table.cell>
                        {{ $user->religion ?? '-' }}
                    </flux:table.cell>
                    <flux:table.cell>
                        {{ $user->birth_place ?? '-' }}
                    </flux:table.cell>
                    <flux:table.cell>
                        {{ $user->birth_date ?? '-' }}
                    </flux:table.cell>
                    <flux:table.cell>
                        {{ $user->entry_month ?? '-' }}
                    </flux:table.cell>
                    <flux:table.cell>
                        {{ $user->entry_year ?? '-' }}
                    </flux:table.cell>
                    <flux:table.cell>
                        {{ $user->email_verified_at }}
                    </flux:table.cell>
                    <flux:table.cell>
                        {{ $user->updated_at }}
                    </flux:table.cell>
                    <flux:table.cell>
                        {{ $user->created_at }}
                    </flux:table.cell>
                </flux:table.row>
            @endforeach
        </flux:table.rows>
    </flux:table>
</flux:main>
