<?php

namespace App\Observers;

use App\Models\Folder;
use Illuminate\Support\Facades\Cache;

class FolderObserver
{

    protected function clearFolderCache(Folder $folder): void
    {
        Cache::forget('folders:list');
        Cache::forget("folders:{$folder->id}");
    }

    /**
     * Handle the Folder "created" event.
     */
    public function created(Folder $folder): void
    {
        $this->clearFolderCache($folder);
    }

    /**
     * Handle the Folder "updated" event.
     */
    public function updated(Folder $folder): void
    {
        $this->clearFolderCache($folder);
    }

    /**
     * Handle the Folder "deleted" event.
     */
    public function deleted(Folder $folder): void
    {
        $this->clearFolderCache($folder);
    }

    /**
     * Handle the Folder "restored" event.
     */
    public function restored(Folder $folder): void
    {
        $this->clearFolderCache($folder);
    }

    /**
     * Handle the Folder "force deleted" event.
     */
    public function forceDeleted(Folder $folder): void
    {
        $this->clearFolderCache($folder);
    }
}
