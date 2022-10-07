@extends('layouts.app')
@section('content')
    <center><h2>Academic Details</h2></center>
    <div>
            <form id="ajaxform" action="{{ route('store') }}" method="post">
                @csrf
              <center>
                <legend>Students information</legend><br>
                
                <div>Name <input type="text" name="name" id="name" value={{ old('name') }}>
                    {{-- <span class="text-danger error-text name_error"></span><br><br> --}}
                    <span class='text-danger'>
                        @error('name')
                    {{ $message }}
                       @enderror
                    </span><br><br>
                    
                    <div>
                        Roll no <input type="number" name="roll_no" id="roll_no"   value={{ old('roll_no') }}>
                        {{-- <span class="text-danger error-text roll_no_error"></span><br><br> --}}
                            <span class='text-danger'>
                                @error('roll_no')
                            {{ $message }}
                               @enderror
                            </span><br><br>
    
                    <div>
                        Subject <input type="text" name="subject" id="subject" value={{ old('subject') }}>
                        {{-- <span class="text-danger error-text subject_error"></span><br><br> --}}
                        <span class='text-danger'>
                            @error('subject')
                        {{ $message }}
                           @enderror
                        </span><br><br>

                
                <button type="submit" class="btn btn-primary" id="btn">Submit</button>
                
            </center>  <br>
            </form>

        
    </div>
    <hr>
</div>
    <center>@include('flash-message')</center>
    
    <table id="tabledata" style="border:5px ;margin-left:auto;margin-right:auto; cellspacing:5px; cellpadding:5px ">        
        <tr>
        <th>Sr. No</th>
        <th>Name</th>
        <th>Roll no.</th>
        <th>Subject</th>                        
        </tr>
        @foreach( $academic as $stu) 
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $stu->name }}</td>
            <td>{{ $stu->roll_no }}</td>
            <td>{{ $stu->subject }}</td>
        </tr>
        @endforeach
    </table>
  <center>{{ $academic->links() }}</center>
  <script>
    // $(document).ready(function(){
    //     $('#btn').click(function(e){
    //         e.preventDefault();
    //         var data = {
    //             'name':$('#name').val(),
    //             'roll_no':$('#roll_no').val(),
    //             'subject':$('#subject').val()
    //         }
    //         $.ajaxSetup({
    //                 headers: {
    //                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //                 }
    //             });
            // console.log(data);
            // jQuery.ajax({
            //     url:'{{ route('store') }}',
            //     type:'POST',
            //     data:data,
            //     // contentType:false,
            //     dataType:'json',
            //     success:function(response){
                    // console.log(response);                  
    //                console.log(response);
                  
    //             }
    //         });
    //     });
    // });
    // $(function(){
    //     $("#ajaxform").on("submit", function(e){
    //         e.preventDefault();
    //         $.ajax({
    //             url:$(this).attr('action'),
    //             method:$(this).attr('method'),
    //             data:new FormData(this),
    //             processData:false,
    //             dataType:'json',
    //             contentType:false,
    //             beforeSend:function(){
    //                 $(document).find('span.error-text').text('');
    //             },
    //             success:function(data ){
    //                 if(data.status == 0){
    //                     $.each(data.error, function(prefix, val){
    //                         $('span.'+prefix+'_error').text(val[0]);
    //                     });
    //                 }else{
    //                     $('#ajaxform')[0].reset();
    //                     // alert(data.msg);
    //                 }
                    
    //             }
    //         });
    //     });        
    // });
  </script>
@endsection