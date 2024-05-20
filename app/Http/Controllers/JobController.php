<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Job;
use App\Notifications\InvoicePaid;
use App\Notifications\JobPostedNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illumniate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class JobController extends Controller
{
    /* $jobs = Job::with('employer')->get();  */

    /*     $jobs = Job::with('employer')->paginate(3); 
     */
    /* $jobs = Job::with('employer')->simplePaginate(3);  */

    /* $jobs = Job::with('employer')->cursorPaginate(3);  */
    /* $jobs = Job::all(); causes lazy loading*/

    public function __construct(public User $user)
    {
    }
    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(3);

        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    public function store()
    {
        $user = Auth::user();

        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        $job = Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1
        ]);

        /* Mail::to($job->employer->user)->send(
            new JobPosted($job)
        ); */

        /* Mail::to($job->employer->user)->queue(
            new JobPosted($job)
        ); */

        Notification::route('mail', $user->email)->notify(new JobPostedNotification($job));

        return redirect('/jobs');
    }

    public function edit(Job $job)
    {
        /* Gate::authorize('edit-job', $job); */
        return view('jobs.edit', ['job' => $job]);
    }
    public function update(Job $job)
    {
        /* Gate::authorize('edit-job', $job); */

        // validate 
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);
        // authorize (After auth init)
        // update the job

        /* $job = Job::findOrFail($id); */

        /* $job ->title = request('title');
        $job ->salary = request('salary'); 
        $job ->save();  identical with update method */

        $job->update([
            'title' => request('title'),
            'salary' => request('salary')
        ]);

        return redirect('/jobs/' . $job->id);
    }

    public function destroy(Job $job)
    {

        $job->delete();

        return redirect('/jobs');
    }
}
