<div>
    <center><h2>Academic Details</h2></center>
    <div>
        <fieldset>
            <form id="ajaxform" action="{{ route('store') }}" method="POST">
                @csrf
              <center>
                <legend>Students information</legend><br>
                
                <div>Name <input type="text" name="name" id="name" value={{ old('name') }}>
                    <span class='text-danger error-text name_error'>
    
                            @error('name') 
                        {{ $message }}
                        @enderror
                    </div><br>
                       
                    </span>
                    
                    <div>
                        Roll no <input type="number" name="roll_no" id="roll_no" value={{ old('roll_no') }}>
                        <span class='text-danger error-text roll_no_error'>
    
                            @error('roll_no') 
                        {{ $message }}
                        @enderror
                    </div><br>
                       
                    </span>
                    <div>
                        Subject <input type="text" name="subject" id="subject" value={{ old('subject') }}>
                        <span class='text-danger error-text subject_error'>
    
                            @error('subject') 
                        {{ $message }}
                        @enderror
                    </div><br>
                       
                    </span>
                    
                
                <button type="submit" class="btn btn-primary">Submit</button>
                
            </center>  <br>
            </form>
        </fieldset>
        
    </div>
    <hr>
</div>
<script>
    $(function(){
        $("#ajaxform").on("submit", function(e){
            e.preventDefault();
            $.ajax({
                url:$(this).attr('action'),
                method:$(this).attr('method');
                data:new FormData(this),
                processData:false,
                dataType:'json',
                contentType:false,
                beforeSend:function(){
                    $(document).find('span.error-text').text('');
                },
                success:function(data ){
                    if(data.status == 0){
                        $.each(data.error, function(prefix, val){
                            $('span.'+prefix+'_error').text(val[0]);
                        });
                    }else{
                        $('#ajaxform')[0].reset();
                        alert(data.msg);
                    }
                    
                }
            });
        });        
    });
  </script>
