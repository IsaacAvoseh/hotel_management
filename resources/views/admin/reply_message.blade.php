@extends('layouts/main')
@section('content')
@include('flash.flash')
<div class="messages_chat mb_30">
    <div class="white_box ">
        <div class="single_message_chat">
            <div class="message_pre_left">
                <div class="message_preview_thumb">
                    <img src="img/messages/1.png" alt="">
                </div>
                <div class="messges_info">
                    @if(isset($message))
                    <h4>{{ $message->name }}</h4>
                    <p>{{ date('d-m-Y', strtotime($message->created_at)) }}</p>
                </div>
            </div>
            <div class="message_content_view red_border">
                <p>
                    {{ $message->email }}
                    <br>
                    Thank you for your update.
                    <br>
                    <span>
                        {{ $message->message }}
                        <br>
                    </span>
                    Regards,
                </p>
            </div>
        </div>
        <hr />
        @endif
        @if(isset($message->reply_title))
        <div class="single_message_chat sender_message">
            <div class="message_pre_left">
                <div class="messges_info">
                    <h4>{{ Auth::User()->name }}</h4>
                    <p>{{ $message->reply_time }}</p>
                </div>
                <div class="message_preview_thumb">
                    <img src="img/messages/1.png" alt="">
                </div>
            </div>
            @if(session('not-sent'))
            <div>
                <b class="text-danger"> Message Not Sent</b>
                <form action="/admin/messages/{{ base64_encode($message->id) }}" method="POST">
                    @csrf
                    <div class="form-group col-md-6">
                        <input hidden type="text" name="reply_title" class="form-control mb-2" placeholder="Message title" value=" {{ $message->reply_title }} ">
                        <textarea hidden name="reply_body" class="form-control" id="exampleFormControlTextarea1" col="10" rows="5">
                        {{ $message->reply_body }}
                        </textarea>
                        <button onclick="showLoading()" type="submit" class="btn_1 full_width m-2">Retry</button>
                    </div>
                </form>

            </div>
            @endif
            <div class="message_content_view">

                <p>
                    Dear {{ $message->name }},
                    <br>
                    {{ $message->reply_title }}
                    <br>
                    <span>
                        {{ $message->reply_body }}
                        <br>
                    </span>
                    Regards,
                </p>
            </div>
        </div>
        @endif
        <hr />
        <div class="message_send_field">
            <form action="/admin/messages/{{ base64_encode($message->id) }}" method="POST">
                @csrf
                <div class="form-group col-md-6">
                    <input type="text" name="reply_title" class="form-control mb-2" placeholder="Message title" value=" {{ old('reply_title') }} ">
                    <textarea placeholder="Type your message" name="reply_body" class="form-control" id="exampleFormControlTextarea1" col="10" rows="5"></textarea>
                    <button type="submit" onclick="showLoading()" class="btn_1 full_width m-2">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>

@endsection