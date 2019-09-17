<div class="row">
    <div class="col-md-12">
        <br />
        
        <br />
        <table class="table table-bordered">
            <tr>
            <h3 align="center">Projects Name:</h3>

            <h3 align="center">Student Name:</h3>
            </tr>
            @foreach($projects as $proj)
            <tr>
                <h3 align="center">{{$proj['title']}} ingevoerde uren:</h3> 
            </tr>
            @endforeach

            
    </div>
</div>
