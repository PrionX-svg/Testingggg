<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style_fiturSummarize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Fitur TTS</title>
</head>
<body>
    <header>
        <div class="title">
            <h3 class="title-text">Text to Speech Converter</h3>
            <div class="search-bar">
                <input type="text" placeholder="Search in site" name="search-box">
                <i class="fas fa-search"></i>
            </div>
            
        </div>
    </header>
    
    <div class="TTSflex-container">
        <aside>
            <div class="Sidebar-navigation">
                <ul>
                    <li><a href="fiturTTS.blade.php">Text to Speech</a></li>
                    <li><a href="fiturSummarize.blade.php">Summarize</a></li>
                    <li><a href="fiturTranslate.blade.php">Translate Languages</a></li>
                    <li><a href="fiturSearchPaper.blade.php">Search Paper</a></li>
                    <li><a href="fiturPublishing.blade.php">Publishing</a></li>
                </ul>
            </div>
       </aside>
    
       <main>
            <div class="content">
                <div class="text-analysis">

                    <h1 class="text-nya">Text Analysis</h1>

                    <div class="hist-summarize">
                        <div class="box-summarize1">
                            <div class="pics">
                                <div class="box"></div>
                                <div class="text-sum">
                                    <h3>Summary</h3>
                                    <h4>Summarized text here</h4>
                                </div>
                            </div>
                        </div>

                        <div class="box-summarize2">
                            <div class="pics">
                                <div class="box"></div>
                                <div class="text-sum">
                                    <h3>Summary</h3>
                                    <h4>Summarized text here</h4>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="box-wrap">
                    <div class="box-text">
                        <h3>Summary</h3>
                        <h4>Summarized text here</h4>
    
                    </div>

                </div>

                
            </div>
    
       </main>

    </div>
   

    
</body>
</html>