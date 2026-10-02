<style>
    .trivora-sidebar-footer {
        padding: 0.75rem;
        border-top: 1px solid rgb(229 231 235);
    }

    .dark .trivora-sidebar-footer {
        border-color: rgb(255 255 255 / 0.1);
    }

    .trivora-sidebar-setting {
        display: flex;
        align-items: center;
        width: 100%;
        gap: 0.75rem;
        padding: 0.625rem 0.75rem;
        border-radius: 0.5rem;
        color: rgb(75 85 99);
        font-size: 0.875rem;
        font-weight: 500;
        text-decoration: none;
        transition:
            background-color 150ms ease,
            color 150ms ease;
    }

    .trivora-sidebar-setting:hover {
        background-color: rgb(243 244 246);
        color: rgb(17 24 39);
    }

    .trivora-sidebar-setting-icon {
        width: 1.5rem;
        height: 1.5rem;
        flex-shrink: 0;
    }

    .dark .trivora-sidebar-setting {
        color: rgb(156 163 175);
    }

    .dark .trivora-sidebar-setting:hover {
        background-color: rgb(255 255 255 / 0.05);
        color: white;
    }
</style>
<div class="trivora-sidebar-footer">
    <a href="{{ \App\Filament\Pages\WebsiteSettings::getUrl() }}" class="trivora-sidebar-setting">
        <x-filament::icon icon="heroicon-o-cog-6-tooth" class="trivora-sidebar-setting-icon" />

        <span>Website Setting</span>
    </a>
</div>
