@extends ("layouts.app")
@section("content")
    <?php
        foreach ($pos as $key => $value) {
            echo $value;
        }
    
    
    ?>

@endsection