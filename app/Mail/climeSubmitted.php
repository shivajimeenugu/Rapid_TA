<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Exports\billExport;
use Maatwebsite\Excel\Facades\Excel;

class climeSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $cid="";
    public function __construct($CID)
    {
        // $this->middleware('auth');
        $this->cid=$CID;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data["email"] = "shivajimeenugu@gmail.com";
        $data["title"] = "Sivaji Meenugu";

        // $file_path = public_path('bills.xlsx');
        Excel::store(new billExport($this->cid),'attachments/CLAIM_'.$this->cid.'.xlsx');

        $files = [

            // storage_path('app/attachments/srq.pdf')
            storage_path('app/attachments/CLAIM_'.$this->cid.'.xlsx')
        ];
        // return $this->view('view.name');
        return $this->to($data['email'])
                    ->subject($data['title'])
                    ->view('mail.Test_mail',["cid"=>$this->cid])
                    ->with($data)
                    ->attach($files[0]);
                    // ->attach($files[1]);
    }
}
