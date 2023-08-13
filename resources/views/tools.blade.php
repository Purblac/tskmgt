@extends('layout')

@section('content')
<head>
    @include('cdn')
    <link rel="stylesheet" href="{{ asset('/style.css') }}">
</head>
<h1 class="pb-5">Some tools to help with your task !</h1>
<div class="container justify-content-center">
    <div class="row pt-5">

        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <div class="card-title card-header text-center">ChatGPT</div>
                <div class="card-body">
                    <div class="text-center">
                        <a href="https://chat.openai.com/" target="_blank">
                            <img src="https://freelogopng.com/images/all_img/1681039084chatgpt-icon.png" alt="Image" style="max-width: 100%; height: auto;">
                        </a>
                    </div>
                    <p class="card-text">Engage in natural conversations with an AI-powered language model. Ask anything!</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <div class="card-title card-header text-center">YT1S</div>
                <div class="card-body">
                    <a href="https://yt1s.com/en607" target="_blank">
                        <img src="https://yt1s.works/icons/icon-256x256.png" alt="YT!S" style="max-width: 100%; height: auto;">
                    </a>
                    <p class="card-text">Download youtube videos for free and direct convert. ps: Highly Illegal</p>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <div class="card-title card-header text-center">RemoveBG</div>
                <div class="card-body">
                    <a href="https://www.remove.bg/" target="_blank">
                        <img src="https://play-lh.googleusercontent.com/UVktVy7A1ytREvn8atk5RvSCcM_5Mc7WDCn8fu56XtZL0OvDey1DUtr-CJ6wk3vWPQXX" alt="RemoveBG" style="max-width: 100%; height: auto;">
                    </a>
                    <p class="card-text">Remove backgrounds in your image</p>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <div class="card-title card-header text-center">Programiz - Online Compiler</div>
                <div class="card-body">
                    <a href="https://www.programiz.com/c-programming/online-compiler/" target="_blank">
                        <img src="https://play-lh.googleusercontent.com/mR_OvbzRbxBVI3O6u1lnXMnxO-zdErQlz4oMaEehsqg09j_P-3znbAbzZqmDeTMbnDhS=s256-rw" alt="Image" style="max-width: 100%; height: auto;">
                    </a>
                    <p class="card-text">Online Compilers for codes</p>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <div class="card-title card-header text-center">QuillBot</div>
                <div class="card-body">
                    <a href="https://quillbot.com/" target="_blank">
                        <img src="https://assets.quillbot.com/images/og_quillbot.png" alt="Image" style="max-width: 100%; height: auto;">
                    </a>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <div class="card-title card-header text-center">Canva</div>
                <div class="card-body">
                    <a href="https://www.canva.com/" target="_blank">
                        <img src="https://1000logos.net/wp-content/uploads/2023/02/Canva-logo.png" alt="Image" style="max-width: 100%; height: auto;">
                    </a>
                    <p class="card-text">One stop online media editing tools</p>
                    
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
