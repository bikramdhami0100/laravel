@extends('pages.newlayout')
@section('contents')
    home page 
@endsection
{{-- @section('title')
    home
@endsection --}}
@push('scripts')
 <script>
     console.log("this is bikram dhami");
 </script>
@endpush
@push('scripts')
 <script>
     console.log("this is bikram dhami two");
 </script>
@endpush
@section('sidebar')
   @parent
    this is sidebar contents
@endsection