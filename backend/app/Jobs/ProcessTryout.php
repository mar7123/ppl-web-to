<?php

namespace App\Jobs;

use App\Models\UserPKG;
use DateTime;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessTryout implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    protected $user_pkg_id;
    protected $user_start;
    protected $sub_duration;
    protected $sub_order;
    public function __construct($user_pkg_id, $user_start, $sub_duration, $sub_order)
    {
        $this->user_pkg_id = $user_pkg_id;
        $this->user_start = $user_start;
        $this->sub_duration = $sub_duration;
        $this->sub_order = $sub_order;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $usr_pkg = UserPKG::where('user_pkg_id', $this->user_pkg_id)
            ->first();
        $sub_to = $usr_pkg->tryouts()
            ->first()
            ->tryout_subs()
            ->orderBy('sub_order', 'asc')
            ->get();
        $next_to = $sub_to->get($this->sub_order + 1);
        $sub_idx = $sub_to->search(function ($sb) use ($usr_pkg) {
            return $sb->tryout_sub_id === $usr_pkg->tryout_sub_id;
        });
        $time = new DateTime($this->user_start);
        $time->modify("+" . $this->sub_duration . " minutes");
        $timedone = $time->format('Y-m-d H:i:s');
        if ($next_to == null || $usr_pkg->user_end != null) {
            UserPKG::where('user_pkg_id', $this->user_pkg_id)
                ->whereNull('user_end')
                ->update(['user_end' => $timedone]);
            return;
        } else if ($this->sub_order == $sub_idx) {
            $usr_pkg->update(['sub_start' => $timedone, 'tryout_sub_id' => $next_to->tryout_sub_id]);
            ProcessTryout::dispatch($this->user_pkg_id, $timedone, $next_to->sub_duration, $this->sub_order + 1)
                ->delay(now()->addMinutes($next_to->sub_duration));
            return;
        }
    }
}
