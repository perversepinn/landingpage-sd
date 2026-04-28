namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $contact = Contact::first();

        Mail::raw("
Nama: {$request->name}
Email: {$request->email}

Pesan:
{$request->message}
        ", function ($mail) use ($contact) {
            $mail->to($contact->email)
                 ->subject('Pesan dari Website');
        });

        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}