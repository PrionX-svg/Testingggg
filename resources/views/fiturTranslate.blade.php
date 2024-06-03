<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style_fiturTranslate.css">
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
            <div class="Converter">
                <div class="convert">
                    <h1 class="title-TTS">Translate to Another Language</h1>
                    <input type="file" placeholder="Enter file to convert">
                    <div class="button-upload">
                        <button class="btn">Upload PDF</button>

                    </div>

                </div>
                
                
                <div class="Display-PDF">
                    <div class="select-language">
                        <h4 class="select-text">Select Language</h4>
                        <div class="button-converter">
                            <button class="button-generate">English</button>
                            <button class="button-speech">Indonesia</button>
                        </div>
                        <button class="translate">Translate</button>

                    </div>
                    

                    <div class="translate-display">
                        <div class="text-speech">
                            <h3 class="title-text-translate">Text Shows Here</h3>
                            <p class="display-text-translate">text</p>
                        </div>

                    </div>

                </div>
    
            </div>
    
       </main>

    </div>
   

    
</body>
</html>