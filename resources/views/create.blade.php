@extends('layouts.main')
@section('main')

<div class="vh-10"></div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-5 offset-md-1 mt-5 mb-5">
            <form action="/create" method="POST" id="markdownForm">
                @csrf
                <div class="mb-3">
                    <textarea class="form-control inp inp-title" name="title" id="inp-title" rows="1" placeholder="Title"></textarea>
                </div>
                <div class="mb-3">
                    <textarea class="form-control inp inp-body math" name="content" id="text" rows="15" placeholder="Start Writing ..."></textarea>
                </div>
                
                <div class="row">
                    <div class="col-md-10">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" value="public" autocomplete="off" checked>
                            <label class="btn btn-outline-success" for="btnradio1">Public</label>
                          
                            <input type="radio" class="btn-check" name="btnradio" value="private" id="btnradio2" autocomplete="off">
                            <label class="btn btn-outline-success" for="btnradio2">Private</label>
                        </div>
                    </div>
                    <div class="col-md-2 df jcfe">
                        <button type="submit" class="btn btn-primary me-auto" style="width: 100%">Create</button> 
                    </div>
                </div>
                               
            </form>
            
        </div>
        <div class="col-md-5 preview mt-5 mb-5">
            <h1 class="display-5 mb-4" id="main-title"></h1>
            <div class="row">
                <div class="col-md-auto">
                    <p class="bcard" id="post-date"></p>
                </div>
                <div class="col-md-auto">
                    <p class="bcard">{{$popper->name}}</p>
                </div>
            </div>
            <div class="markdown-here" id="content"></div>
            <!-- <p>$$e^2$$</p> -->
        </div>
    </div>
</div>



<style>
    .inp {
        border: none;
        border-radius: 0;
        /* background-color: rgba(150, 150, 150, 0.1); */
        /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.4); */
        border-bottom: 1px solid rgba(0, 0, 0, 0.2);
    }
    .inp-title {
        font-size: 2rem;
        font-weight: bold;
    }
    .inp-body {
        font-size: 1.2rem;
    }

    .form-control:hover{
        border: none;
        box-shadow: none;
        border-radius: 10px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.5);
        background-color: rgba(150, 150, 150, 0.1);
    }

    .form-control:focus {
        border: none;
        box-shadow: none;
        border-bottom: 1px solid rgba(0, 0, 0, 0.5);
        background-color: rgba(150, 150, 150, 0.1);
        border-radius: 10px;
    }

    .preview {
        border: 1px solid rgba(0, 0, 0, 0.2);
        border-radius: 10px;
        padding: 10px;
        padding-left: 20px;
        padding-right: 20px;
        background-color: rgba(150, 150, 150, 0.1);
        min-height: 30vh;
        /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.4); */
    }

    @media (min-width: 992px) { /* Desktop screens and larger */
        .preview {
            margin-left: 50px;
        }
    }

    .bcard {
        border: 1px solid rgba(12, 103, 0, 0.559);
        border-radius: 10px;
        padding: 5px;
        padding-left: 12px;
        padding-right: 12px;
        background-color: rgba(30, 255, 0, 0.078);
        /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.4); */
        font-family: 'jetbrains mono', monospace;
        font-size: 0.8rem;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Event listener for textarea input
        document.getElementById('text').addEventListener('input', function() {
            updatePreview();
            updateMathPreview();
        });

        // Event listener for modal show
        document.getElementById('exampleModal').addEventListener('show.bs.modal', function () {
            updateMathPreview();
        });

        // Function to update the preview
        function updatePreview() {
            let textValue = document.getElementById('text').value;
            document.getElementById('content').innerHTML = marked.parse(textValue);
        }

        // Function to update MathJax rendering and display line breaks
        function updateMathPreview() {
            const content = document.getElementById('content');
            const contentWithLineBreaks = content.innerHTML.replace(/\n/g, '<br>');

            content.innerHTML = contentWithLineBreaks;

            // Update MathJax rendering
            MathJax.texReset();
            MathJax.typesetClear();
            MathJax.typesetPromise([content]);
        }
    });
</script>

<script>
    title_input = document.getElementById('inp-title');
    title_preview = document.getElementById('main-title');
    title_input.addEventListener('input', function() {
        title_preview.innerHTML = title_input.value;
    });

    date = new Date();
    const options = { year: 'numeric', month: 'long', day: 'numeric' };
    document.getElementById('post-date').innerHTML = date.toLocaleDateString('en-US', options);

    link_input = document.getElementById('inp-link');
    link_display = document.getElementById('link-display');
    link_input.addEventListener('input', function() {
        link_display.src = link_input.value;
    });
</script>

@endsection