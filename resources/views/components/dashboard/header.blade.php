<flux:header>
    <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

    <flux:spacer />

    <flux:dropdown position="top" alignt="start">
        <flux:profile initials="Ad" />

        <flux:menu>
            <div class="px-2 py-1.5">
                <flux:text size="sm">
                    Halo,
                </flux:text>
                <flux:heading class="truncate">
                    Administrator
                </flux:heading>
            </div>

            <flux:menu.separator />

            <flux:navlist>
                <flux:navlist.group heading="Menu">
                    <flux:navlist.item href="#">
                        Pengaturan
                    </flux:navlist.item>
                    <flux:navlist.item href="#">
                        Notifikasi
                    </flux:navlist.item>
                    <flux:navlist.item href="#">
                        Informasi
                    </flux:navlist.item>
                </flux:navlist.group>
            </flux:navlist>

            <flux:menu.separator />

            <flux:radio.group x-data variant="segmented" x-model="$flux.appearance">
                <flux:radio value="light" icon="sun">
                    Terang
                </flux:radio>
                <flux:radio value="dark" icon="moon">
                    Gelap
                </flux:radio>
                <flux:radio value="system" icon="computer-desktop">
                    Sistem
                </flux:radio>
            </flux:radio.group>

            <flux:menu.separator />

            <flux:menu.item href="{{ route('home') }}" icon="arrow-right-start-on-rectangle" variant="danger">
                Keluar
            </flux:menu.item>
            </flux:navmenu>
    </flux:dropdown>
</flux:header>
