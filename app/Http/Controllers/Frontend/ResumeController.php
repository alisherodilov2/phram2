<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Resume;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function store(Request $request, $id)
    {
        // $request->validate([
        //     'name' => 'required|string',
        //     'email' => 'required|email',
        //     'description' => 'nullable|string',
        //     'number' => 'nullable|string',
        //     'resume_file' => 'required|mimes:pdf,doc,docx|max:10240', // Validate file type and size
        // ]);
        $resume = Resume::create([
            'name' => $request->name,
            'email' => $request->email,
            'description' => $request->description,
            'number' => $request->number,
            'vacancy_id' => $id,
        ]);
        if ($request->hasFile('resume_file')) {
            $resume->addMediaFromRequest('resume_file')->toMediaCollection('resumes'); // Optional: specify a custom media collection
        }
        $this->sendMessage($resume);
    }

    public function sendMessage($resume)
    {
        $botToken = '7967562266:AAGFws7ptIiPQE4j8HKYCXMeZVfi01abMbg'; // Replace with your bot token
        $chatId = '7465336376'; // Replace with the target chat ID or user ID

        // Initialize cart items string
        $resumeFile = $resume->getFirstMedia('resumes');
        // Construct the message
        $message = "
<b>Vakansiya:</b>\n
{$resume->vacancy->title}


<b>Nomzod</b>
<b>Ism:</b> $resume->name \n
<b>📧Email:</b> $resume->email \n
<b>📱 Telefon:</b> $resume->number \n
<b>Ta'rif:</b> $resume->description \n
<b>CV:</b> <a href='{$resumeFile->getUrl()}'>Profile Link</a>\n
";


        // URL for sending the message
        $url = "https://api.telegram.org/bot$botToken/sendMessage";

        // Prepare the parameters for the POST request
        $postFields = [
            'chat_id' => $chatId,
            'text' => $message,
            'parse_mode' => 'HTML',
        ];

        // Initialize cURL
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Disable SSL verification if needed (not recommended for production)

        // Execute the request
        $response = curl_exec($ch);
        curl_close($ch);

        // Handle response (optional)
        $responseData = json_decode($response, true);
        dd($responseData);
        return $responseData;

        if (isset($responseData['ok']) && $responseData['ok']) {
            return 'Message sent successfully.';
        } else {
            return 'Error sending message.';
        }
    }
}
