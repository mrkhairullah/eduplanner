<flux:main>
    <flux:breadcrumbs class="mb-4">
        <flux:breadcrumbs.item href="{{ route('dashboard.overview') }}" separator="slash">
            Dasbor
        </flux:breadcrumbs.item>
        <flux:breadcrumbs.item href="{{ route('dashboard.users.index') }}" separator="slash">
            Pengguna
        </flux:breadcrumbs.item>
        <flux:breadcrumbs.item separator="slash">
            Ubah
        </flux:breadcrumbs.item>
    </flux:breadcrumbs>

    <flux:heading size="xl" level="1">
        Ubah Pengguna
    </flux:heading>

    <flux:text class="mb-6 mt-2 text-base">
        Silakan isi formulir di bawah ini untuk mengubah pengguna.
    </flux:text>

    <flux:separator variant="subtle" />
</flux:main>
