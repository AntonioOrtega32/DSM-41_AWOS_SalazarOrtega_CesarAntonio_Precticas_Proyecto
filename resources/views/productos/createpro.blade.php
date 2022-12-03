@include('layouts.partials.header')

@error('Prod')
{{ $message }}
    
@enderror


@include('layouts.partials.formpro')


@include('layouts.partials.footer')