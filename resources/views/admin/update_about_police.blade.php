@extends('layouts.app')

@section('css')
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.js"></script>
@endsection

@section('content')

    <div class="container">
    <div class="columns">
      <div class="column is-10 is-offset-1">

      <div class="title is-4">
        Update About CG Police section
      </div>

      <form action="{{route("update-about-cgp")}}" method="POST">
        @csrf
    
        <div class="content">
            <div class="field">
                <label class="label"></label>
                <div class="control">
                  <textarea 
                    name="body"
                    id="editor"
                    class="textarea"
                    rows="10" 
                    cols="80"
                    
                    >
                  </textarea>
                </div>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link">
                    Submit
                </button>
            </div>
        </div>
        
      </form>
      <hr>
      
      <div class="box">
        <h2 class="title is-2">
          About CG Police
        </h2>
        <hr>
        <div class="content">
            {!! $aboutPolice !!}              
        </div>
      </div>
      
    </div>


    </div>
    </div>

  
  <script type="text/javascript">
  
    $("#editor").summernote({
      height: 300,
      tableClassName: 'table is-striped is-hoverable is-fullwidth',
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'clear']],
        ['fontname', ['fontname']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['table', ['table']],
        ['insert', ['link', 'hr']],
        ['view', ['fullscreen']],
      ],
    });

    $('#editor').summernote('code', {!! $editorData !!});
    
  </script>

 

@endsection


