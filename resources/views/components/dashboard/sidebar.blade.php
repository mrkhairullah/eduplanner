<flux:sidebar class="bg-zinc-50 dark:bg-zinc-900 border-r border-zinc-200 dark:border-zinc-700" sticky
              collapsible="mobile">
    <flux:sidebar.header>
        <flux:brand name="EduPlanner" href="{{ route('home') }}">
            <x-slot name="logo">
                <div class="size-8 rounded shrink-0 bg-accent text-accent-foreground flex items-center justify-center">
                    <i class="font-serif font-bold text-sm">EP</i>
                </div>
            </x-slot>
        </flux:brand>

        <flux:sidebar.collapse class="lg:hidden" />
    </flux:sidebar.header>

    <flux:sidebar.nav>
        <flux:sidebar.item href="{{ route('dashboard.overview') }}" icon="squares-2x2" current>
            Dasbor
        </flux:sidebar.item>

        <flux:sidebar.group class="grid" expandable heading="Kelola Pengguna">
            <flux:sidebar.item href="{{ route('dashboard.users.index') }}">
                Pengguna
            </flux:sidebar.item>
            <flux:sidebar.item href="#">
                Peran
            </flux:sidebar.item>
            <flux:sidebar.item href="#">
                Izin
            </flux:sidebar.item>
            <flux:sidebar.item href="#">
                Riwayat Aktivitas
            </flux:sidebar.item>
        </flux:sidebar.group>
    </flux:sidebar.nav>

    <flux:sidebar.spacer />

    <flux:sidebar.nav>
        <flux:sidebar.item href="#" icon="information-circle">
            Panduan
        </flux:sidebar.item>
    </flux:sidebar.nav>
</flux:sidebar>
