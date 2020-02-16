@component('mail::message')

    # THANK YOU FOR YOUR MESSAGE

    **Name** {{$data['name']}}

    **Email** {{$data['email']}}

    # ABOUT
    **Your Message**

    >  {{$data['message']}}




@endcomponent
