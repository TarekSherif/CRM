<?php

namespace App\Mail;
use App\Models\Company;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;


    protected  $company;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Company $company)
    {
        $this->company = $company;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->subject($this->company->name." تم اضافة شركة  ")
        //             ->view('admin.companies.email')->with([
        //                 'company' => $this->company
        //             ]);
        return $this->markdown('admin.companies.email')->with([
            'company' => $this->company
        ]);
    }
}
