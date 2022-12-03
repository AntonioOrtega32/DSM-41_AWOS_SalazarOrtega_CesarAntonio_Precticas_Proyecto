@include('layouts.partials.header')

@error('Email')
{{ $message }}
    
@enderror



@include('layouts.partials.formcli')


@include('layouts.partials.footer')