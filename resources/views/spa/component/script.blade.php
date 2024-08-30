<script>
    window.core = {
        APP_NAME: 'Kalles - ',
        APP_URL: '{{env('APP_URL')}}',
        @if(\Illuminate\Support\Facades\Auth::guard()->check())
        user: {!! \Illuminate\Support\Facades\Auth::guard()->user() !!},
        @else
        user: null
        @endif
    };
</script>
