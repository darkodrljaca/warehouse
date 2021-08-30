
<!DOCTYPE html>
<head>
    <meta http-equiv=Content-Type content="text/html; charset=UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>    
<style type="text/css">

span.cls_002{font-family:Arial,serif;font-size:8.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_002{font-family:Arial,serif;font-size:8.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_004{font-family:Arial,serif;font-size:11.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_004{font-family:Arial,serif;font-size:11.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_003{font-family:Arial,serif;font-size:10.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_003{font-family:Arial,serif;font-size:10.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_005{font-family:Arial,serif;font-size:8.0px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_005{font-family:Arial,serif;font-size:8.0px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_006{font-family:Arial,serif;font-size:7.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_006{font-family:Arial,serif;font-size:7.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_007{font-family:Arial,serif;font-size:8.9px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_007{font-family:Arial,serif;font-size:8.9px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
input.vals{border:0;font-size:7.0px;width:48px;background:transparent;text-align: right;}
input.napomena{border:0;font-size:7.0px;width:18px;background:transparent;}
select.livesearch{font-size:7.0px;line-height:14px;width:265px;background:transparent;}

</style>
</head>
<body>
<!-- zumirati - duplo! -->
<div style="transform: scale(2);"> 
<div 
    style="
        position:absolute;
        left:50%;
        margin-left:-297px;
        top:0px;
        width:595px;
        height:842px;
        border-style:outset;
        overflow:hidden
    "
>

<div style="position:absolute;left:0px;top:0px">
<img src="{{asset("bil_img/background1.jpg")}}" width=595 height=842>
</div>

<div style="position:absolute;left:210.48px;top:32.96px" class="cls_002"><span class="cls_002">Попуњава правно лице - предузетник</span></div>
<div style="position:absolute;left:70.80px;top:51.92px" class="cls_002"><span class="cls_002">Матични број</span></div>
<div style="position:absolute;left:245.52px;top:51.92px" class="cls_002"><span class="cls_002">Шифра делатности</span></div>
<div style="position:absolute;left:465.60px;top:51.92px" class="cls_002"><span class="cls_002">ПИБ</span></div>
<div style="position:absolute;left:36.24px;top:87.92px" class="cls_002"><span class="cls_002">Назив:</span></div>
<div style="position:absolute; left:80.8px; top:79.92px" class="cls_002">
    <span class="cls_002">
        <select name="company_id" class="livesearch" aria-label="Default select example"></select>            
    </span>
</div>
<div style="position:absolute;left:36.24px;top:112.88px" class="cls_002"><span class="cls_002">Седиште :</span></div>
<div style="position:absolute;left:243.36px;top:167.84px" class="cls_004"><span class="cls_004">БИЛАНС СТАЊА</span></div>
<div style="position:absolute;left:177.60px;top:187.04px" class="cls_003"><span class="cls_003">на дан</span></div>
<div style="position:absolute;left:318.48px;top:186.08px" class="cls_003"><span class="cls_003">20</span></div>
<div style="position:absolute;left:370.08px;top:187.04px" class="cls_003"><span class="cls_003">године</span></div>
<div style="position:absolute;left:457.92px;top:200.96px" class="cls_002"><span class="cls_002">- у хиљадама динара -</span></div>
<div style="position:absolute;left:448.56px;top:215.84px" class="cls_002"><span class="cls_002">Износ</span></div>
<div style="position:absolute;left:44.88px;top:224.96px" class="cls_002"><span class="cls_002">Група</span></div>
<div style="position:absolute;left:341.76px;top:224.96px" class="cls_002"><span class="cls_002">Напо-</span></div>
<div style="position:absolute;left:452.64px;top:230.96px" class="cls_002"><span class="cls_002">Претходна година</span></div>
<div style="position:absolute;left:41.52px;top:233.84px" class="cls_002"><span class="cls_002">рачуна,</span></div>
<div style="position:absolute;left:341.28px;top:234.80px" class="cls_002"><span class="cls_002">мена</span></div>
<div style="position:absolute;left:166.56px;top:236.96px" class="cls_002"><span class="cls_002">П О З И Ц И Ј А</span></div>
<div style="position:absolute;left:312.96px;top:236.96px" class="cls_002"><span class="cls_002">АОП</span></div>
<div style="position:absolute;left:380.64px;top:236.96px" class="cls_002"><span class="cls_002">Текућа</span></div>
<div style="position:absolute;left:44.88px;top:243.92px" class="cls_002"><span class="cls_002">рачун</span></div>
<div style="position:absolute;left:342.96px;top:244.88px" class="cls_002"><span class="cls_002">број</span></div>
<div style="position:absolute;left:380.88px;top:245.84px" class="cls_002"><span class="cls_002">година</span></div>
<div style="position:absolute;left:430.80px;top:243.92px" class="cls_002"><span class="cls_002">Крајње стање</span></div>
<div style="position:absolute;left:491.28px;top:243.92px" class="cls_002"><span class="cls_002">Почетно стање</span></div>
<div style="position:absolute;left:54.00px;top:264.80px" class="cls_002"><span class="cls_002">1</span></div>
<div style="position:absolute;left:194.40px;top:264.80px" class="cls_002"><span class="cls_002">2</span></div>
<div style="position:absolute;left:319.92px;top:264.80px" class="cls_002"><span class="cls_002">3</span></div>
<div style="position:absolute;left:349.92px;top:264.80px" class="cls_002"><span class="cls_002">4</span></div>
<div style="position:absolute;left:393.84px;top:264.80px" class="cls_002"><span class="cls_002">5</span></div>
<div style="position:absolute;left:453.84px;top:264.80px" class="cls_002"><span class="cls_002">6</span></div>
<div style="position:absolute;left:516.96px;top:264.80px" class="cls_002"><span class="cls_002">7</span></div>
<div style="position:absolute;left:90.00px;top:278.96px" class="cls_005"><span class="cls_005">А К Т И В А</span></div>

<div style="position:absolute;left:52.32px;top:295.04px" class="cls_006"><span class="cls_006">00</span></div>
<div style="position:absolute;left:90.00px;top:293.84px" class="cls_005"><span class="cls_005">А. УПИСАНИ А НЕУПЛАЋЕНИ КАПИТАЛ</span></div>
<div style="position:absolute;left:312.72px;top:294.80px" class="cls_002"><span class="cls_002">0001</span></div>
<div style="position:absolute;left:340px;top:294.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0001_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:294.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0001_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute;left:428.8px;top:294.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0001_6" maxlength="12" size="12" class="vals">
    </span></div>
<div style="position:absolute;left:491.8px;top:294.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0001_7" maxlength="12" size="12" class="vals">
    </span></div>

<!-- aop 0002 -->    
<div style="position:absolute;left:90.00px;top:306.80px" class="cls_005"><span class="cls_005">Б. СТАЛНА ИМОВИНА</span></div>
<div style="position:absolute;left:312.72px;top:311.84px" class="cls_002"><span class="cls_002">0002</span></div>
<div style="position:absolute;left:100.08px;top:314.96px" class="cls_002"><span class="cls_002">(0003+0010+0019+0024+0034)</span></div>
<div style="position:absolute;left:340px;top:310.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0002_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:310.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0002_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:310.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0002_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:310.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0002_7" maxlength="12" size="12" class="vals">            
    </span>
</div>    

<!-- aop 0003 -->
<div style="position:absolute;left:90.00px;top:327.92px" class="cls_002"><span class="cls_002">I. НЕМАТЕРИЈАЛНА ИМОВИНА</span></div>
<div style="position:absolute;left:52.32px;top:334.16px" class="cls_006"><span class="cls_006">01</span></div>
<div style="position:absolute;left:312.72px;top:332.96px" class="cls_002"><span class="cls_002">0003</span></div>
<div style="position:absolute;left:99.12px;top:336.80px" class="cls_002"><span class="cls_002">(0004+0005+0006+0007+0008+0009)</span></div>
<div style="position:absolute;left:340px;top:332.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0003_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:332.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0003_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:332.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0003_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:332.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0003_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<!-- aop 0004 -->
<div style="position:absolute;left:33.60px;top:351.20px" class="cls_006"><span class="cls_006">010 и део 019</span></div>
<div style="position:absolute;left:90.00px;top:350.96px" class="cls_002"><span class="cls_002">1. Улагања у развој</span></div>
<div style="position:absolute;left:312.72px;top:350.96px" class="cls_002"><span class="cls_002">0004</span></div>
<div style="position:absolute;left:340px;top:350.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0004_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:350.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0004_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:350.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0004_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:350.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0004_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<!-- aop 0005 -->
<div style="position:absolute;left:39.60px;top:365.12px" class="cls_006"><span class="cls_006">011, 012 и</span></div>
<div style="position:absolute;left:90.00px;top:363.92px" class="cls_002"><span class="cls_002">2. Концесије, патенти, лиценце, робне и услужне</span></div>
<div style="position:absolute;left:312.72px;top:367.76px" class="cls_002"><span class="cls_002">0005</span></div>
<div style="position:absolute;left:340px;top:367.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0005_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:367.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0005_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:367.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0005_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:367.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0005_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<!-- aop 0006 -->
<div style="position:absolute;left:43.44px;top:374.00px" class="cls_006"><span class="cls_006">део 019</span></div>
<div style="position:absolute;left:101.04px;top:371.84px" class="cls_002"><span class="cls_002">марке, софтвер и остала права</span></div>
<div style="position:absolute;left:33.60px;top:387.20px" class="cls_006"><span class="cls_006">013 и део 019</span></div>
<div style="position:absolute;left:90.00px;top:385.76px" class="cls_002"><span class="cls_002">3. Гудвил</span></div>
<div style="position:absolute;left:312.72px;top:386.96px" class="cls_002"><span class="cls_002">0006</span></div>
<div style="position:absolute;left:340px;top:386.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0006_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:386.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0006_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:386.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0006_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:386.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0006_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<!-- aop 0007 -->
<div style="position:absolute;left:33.60px;top:401.12px" class="cls_006"><span class="cls_006">014 и део 019</span></div>
<div style="position:absolute;left:90.00px;top:399.92px" class="cls_002"><span class="cls_002">4. Остала нематеријална имовина</span></div>
<div style="position:absolute;left:312.72px;top:400.88px" class="cls_002"><span class="cls_002">0007</span></div>
<div style="position:absolute;left:340px;top:400.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0007_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:400.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0007_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:400.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0007_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:400.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0007_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<!-- aop 0008 -->
<div style="position:absolute;left:33.60px;top:415.04px" class="cls_006"><span class="cls_006">015 и део 019</span></div>
<div style="position:absolute;left:90.00px;top:414.80px" class="cls_002"><span class="cls_002">5. .Нематеријална имовина у припреми</span></div>
<div style="position:absolute;left:312.72px;top:414.80px" class="cls_002"><span class="cls_002">0008</span></div>
<div style="position:absolute;left:340px;top:414.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0008_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:414.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0008_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:414.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0008_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:414.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0008_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<!-- aop 0009 -->
<div style="position:absolute;left:33.60px;top:429.20px" class="cls_006"><span class="cls_006">016 и део 019</span></div>
<div style="position:absolute;left:90.00px;top:428.96px" class="cls_002"><span class="cls_002">6. Аванси за нематеријалну имовину</span></div>
<div style="position:absolute;left:312.72px;top:428.96px" class="cls_002"><span class="cls_002">0009</span></div>
<div style="position:absolute;left:340px;top:428.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0009_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:428.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0009_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:428.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0009_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:428.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0009_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:90.00px;top:440.96px" class="cls_002"><span class="cls_002">II. НЕКРЕТНИНЕ, ПОСТРОЈЕЊА И ОПРЕМА</span></div>
<div style="position:absolute;left:52.32px;top:447.20px" class="cls_006"><span class="cls_006">02</span></div>
<div style="position:absolute;left:312.72px;top:445.76px" class="cls_002"><span class="cls_002">0010</span></div>
<div style="position:absolute;left:100.08px;top:449.84px" class="cls_002"><span class="cls_002">(0011+0012+0013+0014+0015+0016+0017+0018)</span></div>
<div style="position:absolute;left:340px;top:445.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00010_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:445.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00010_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:445.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00010_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:445.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00010_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:39.60px;top:464.00px" class="cls_006"><span class="cls_006">020, 021 и</span></div>
<div style="position:absolute;left:90.00px;top:466.88px" class="cls_002"><span class="cls_002">1. Земљиште</span></div>
<div style="position:absolute;left:312.72px;top:466.88px" class="cls_002"><span class="cls_002">0011</span></div>
<div style="position:absolute;left:340px;top:466.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00011_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:466.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00011_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:466.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00011_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:466.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00011_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:43.44px;top:473.12px" class="cls_006"><span class="cls_006">део 029</span></div>
<div style="position:absolute;left:33.60px;top:486.08px" class="cls_006"><span class="cls_006">022 и део 029</span></div>
<div style="position:absolute;left:90.00px;top:484.88px" class="cls_002"><span class="cls_002">2. Грађевински објекти</span></div>
<div style="position:absolute;left:312.72px;top:485.84px" class="cls_002"><span class="cls_002">0012</span></div>
<div style="position:absolute;left:340px;top:485.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00012_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:485.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00012_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:485.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00012_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:485.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00012_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:33.60px;top:500.00px" class="cls_006"><span class="cls_006">023 и део 029</span></div>
<div style="position:absolute;left:90.00px;top:498.80px" class="cls_002"><span class="cls_002">3. Постројења и опрема</span></div>
<div style="position:absolute;left:312.72px;top:499.76px" class="cls_002"><span class="cls_002">0013</span></div>
<div style="position:absolute;left:340px;top:499.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00013_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:499.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00013_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:499.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00013_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:499.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00013_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:33.60px;top:514.16px" class="cls_006"><span class="cls_006">024 и део 029</span></div>
<div style="position:absolute;left:90.00px;top:513.92px" class="cls_002"><span class="cls_002">4. Инвестиционе некретнине</span></div>
<div style="position:absolute;left:312.72px;top:513.92px" class="cls_002"><span class="cls_002">0014</span></div>
<div style="position:absolute;left:340px;top:513.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00014_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:513.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00014_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:513.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00014_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:513.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00014_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:33.60px;top:528.08px" class="cls_006"><span class="cls_006">025 и део 029</span></div>
<div style="position:absolute;left:90.00px;top:527.84px" class="cls_002"><span class="cls_002">5. Остале некретнине, постројења и опрема</span></div>
<div style="position:absolute;left:312.72px;top:527.84px" class="cls_002"><span class="cls_002">0015</span></div>
<div style="position:absolute;left:340px;top:527.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00015_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:527.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00015_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:527.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00015_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:527.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00015_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:33.60px;top:542.00px" class="cls_006"><span class="cls_006">026 и део 029</span></div>
<div style="position:absolute;left:90.00px;top:541.76px" class="cls_002"><span class="cls_002">6. Некретнине, постројења и улагања у припреми</span></div>
<div style="position:absolute;left:312.72px;top:541.76px" class="cls_002"><span class="cls_002">0016</span></div>
<div style="position:absolute;left:340px;top:541.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00016_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:541.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00016_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:541.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00016_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:541.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00016_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:90.00px;top:554.72px" class="cls_002"><span class="cls_002">7. Улагања у туђим некретнинама, постројењима</span></div>
<div style="position:absolute;left:33.60px;top:559.04px" class="cls_006"><span class="cls_006">027 и део 029</span></div>
<div style="position:absolute;left:312.72px;top:558.80px" class="cls_002"><span class="cls_002">0017</span></div>
<div style="position:absolute;left:340px;top:558.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00017_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:558.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00017_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:558.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00017_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:558.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00017_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:99.12px;top:562.88px" class="cls_002"><span class="cls_002">и опреми</span></div>
<div style="position:absolute;left:33.60px;top:578.00px" class="cls_006"><span class="cls_006">028 и део 029</span></div>
<div style="position:absolute;left:90.00px;top:576.80px" class="cls_002"><span class="cls_002">8. Аванси за некретнине, постројења и опрему</span></div>
<div style="position:absolute;left:312.72px;top:577.76px" class="cls_002"><span class="cls_002">0018</span></div>
<div style="position:absolute;left:340px;top:577.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00018_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:577.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00018_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:577.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00018_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:577.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00018_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:90.00px;top:589.76px" class="cls_002"><span class="cls_002">III. БИОЛОШКА СРЕДСТВА</span></div>
<div style="position:absolute;left:52.32px;top:596.00px" class="cls_006"><span class="cls_006">03</span></div>
<div style="position:absolute;left:312.72px;top:594.80px" class="cls_002"><span class="cls_002">0019</span></div>
<div style="position:absolute;left:340px;top:594.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00019_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:594.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00019_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:594.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00019_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:594.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00019_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:99.12px;top:597.92px" class="cls_002"><span class="cls_002">(020+021+022+023)</span></div>
<div style="position:absolute;left:39.60px;top:613.04px" class="cls_006"><span class="cls_006">030, 031 и</span></div>
<div style="position:absolute;left:90.00px;top:614.72px" class="cls_002"><span class="cls_002">1. Шуме и вишегодишњи засади</span></div>
<div style="position:absolute;left:312.72px;top:615.92px" class="cls_002"><span class="cls_002">0020</span></div>
<div style="position:absolute;left:340px;top:615.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00020_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:615.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00020_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:615.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00020_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:615.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00020_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:43.44px;top:620.96px" class="cls_006"><span class="cls_006">део 039</span></div>
<div style="position:absolute;left:33.60px;top:634.16px" class="cls_006"><span class="cls_006">032 и део 039</span></div>
<div style="position:absolute;left:90.00px;top:633.92px" class="cls_002"><span class="cls_002">2. Основно стадо</span></div>
<div style="position:absolute;left:312.72px;top:633.92px" class="cls_002"><span class="cls_002">0021</span></div>
<div style="position:absolute;left:340px;top:633.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00021_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:633.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00021_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:633.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00021_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:633.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00021_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:33.60px;top:648.08px" class="cls_006"><span class="cls_006">037 и део 039</span></div>
<div style="position:absolute;left:90.00px;top:647.84px" class="cls_002"><span class="cls_002">3. Биолошка средства у припреми</span></div>
<div style="position:absolute;left:312.72px;top:647.84px" class="cls_002"><span class="cls_002">0022</span></div>
<div style="position:absolute;left:340px;top:647.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00022_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:647.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00022_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:647.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00022_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:647.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00022_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:33.60px;top:662.00px" class="cls_006"><span class="cls_006">038 и део 039</span></div>
<div style="position:absolute;left:90.00px;top:661.76px" class="cls_002"><span class="cls_002">4. Аванси за биолошка средства</span></div>
<div style="position:absolute;left:312.72px;top:661.76px" class="cls_002"><span class="cls_002">0023</span></div>
<div style="position:absolute;left:340px;top:661.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00023_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:661.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00023_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:661.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00023_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:661.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00023_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:90.00px;top:674.72px" class="cls_002"><span class="cls_002">IV. ДУГОРОЧНИ ФИНАНСИЈСКИ ПЛАСМАНИ</span></div>
<div style="position:absolute;left:36.48px;top:680.96px" class="cls_006"><span class="cls_006">04 осим 047</span></div>
<div style="position:absolute;left:312.72px;top:678.80px" class="cls_002"><span class="cls_002">0024</span></div>
<div style="position:absolute;left:100.08px;top:682.88px" class="cls_002"><span class="cls_002">(025+026+027+028+029+030+031+032+033)</span></div>
<div style="position:absolute;left:340px;top:682.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00024_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:682.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00024_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:682.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00024_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:682.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00024_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:33.60px;top:698.00px" class="cls_006"><span class="cls_006">040 и део 049</span></div>
<div style="position:absolute;left:90.00px;top:697.76px" class="cls_002"><span class="cls_002">1. Учешћа у капиталу зависних правних лица</span></div>
<div style="position:absolute;left:312.72px;top:697.76px" class="cls_002"><span class="cls_002">0025</span></div>
<div style="position:absolute;left:340px;top:697.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00025_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:697.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00025_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:697.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00025_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:697.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00025_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:90.00px;top:709.76px" class="cls_002"><span class="cls_002">2. Учешћа у капиталу придружених субјеката</span></div>
<div style="position:absolute;left:33.60px;top:715.04px" class="cls_006"><span class="cls_006">041 и део 049</span></div>
<div style="position:absolute;left:312.72px;top:714.80px" class="cls_002"><span class="cls_002">0026</span></div>
<div style="position:absolute;left:340px;top:714.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00026_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:714.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00026_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:714.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00026_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:714.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00026_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:99.12px;top:718.88px" class="cls_002"><span class="cls_002">и заједничким подухватима</span></div>
<div style="position:absolute;left:90.00px;top:731.84px" class="cls_002"><span class="cls_002">3. Учешћа у капиталу осталих правних лица и друге</span></div>
<div style="position:absolute;left:33.60px;top:736.16px" class="cls_006"><span class="cls_006">042 и део 049</span></div>
<div style="position:absolute;left:312.72px;top:735.92px" class="cls_002"><span class="cls_002">0027</span></div>
<div style="position:absolute;left:340px;top:735.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00027_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:735.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00027_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:735.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00027_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:735.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00027_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:99.12px;top:739.76px" class="cls_002"><span class="cls_002">хартије од вредности расположиве за продају</span></div>
<div style="position:absolute;left:33.60px;top:754.16px" class="cls_006"><span class="cls_006">део 043, део</span></div>
<div style="position:absolute;left:90.00px;top:752.72px" class="cls_002"><span class="cls_002">4. Дугорочни пласмани матичним, зависним и</span></div>
<div style="position:absolute;left:312.72px;top:756.80px" class="cls_002"><span class="cls_002">0028</span></div>
<div style="position:absolute;left:340px;top:756.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00028_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:756.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00028_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:756.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00028_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:756.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00028_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:32.64px;top:761.12px" class="cls_006"><span class="cls_006">044 и део 049</span></div>
<div style="position:absolute;left:99.12px;top:760.88px" class="cls_002"><span class="cls_002">осталим повезаним лицима у земљи</span></div>
</div>
<div style="position:absolute;left:50%;margin-left:-297px;top:852px;width:595px;height:842px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
    <img src="{{asset("bil_img/background2.jpg")}}" width=595 height=842>
</div>
<div style="position:absolute;left:448.56px;top:30.80px" class="cls_002"><span class="cls_002">Износ</span></div>
<div style="position:absolute;left:44.88px;top:38.96px" class="cls_002"><span class="cls_002">Група</span></div>
<div style="position:absolute;left:341.76px;top:39.92px" class="cls_002"><span class="cls_002">Напо-</span></div>
<div style="position:absolute;left:452.64px;top:44.96px" class="cls_002"><span class="cls_002">Претходна година</span></div>
<div style="position:absolute;left:41.52px;top:48.80px" class="cls_002"><span class="cls_002">рачуна,</span></div>
<div style="position:absolute;left:166.56px;top:50.96px" class="cls_002"><span class="cls_002">П О З И Ц И Ј А</span></div>
<div style="position:absolute;left:312.96px;top:50.96px" class="cls_002"><span class="cls_002">АОП</span></div>
<div style="position:absolute;left:341.28px;top:50.00px" class="cls_002"><span class="cls_002">мена</span></div>
<div style="position:absolute;left:380.64px;top:50.96px" class="cls_002"><span class="cls_002">Текућа</span></div>
<div style="position:absolute;left:44.88px;top:58.88px" class="cls_002"><span class="cls_002">рачун</span></div>
<div style="position:absolute;left:430.80px;top:57.92px" class="cls_002"><span class="cls_002">Крајње стање</span></div>
<div style="position:absolute;left:491.28px;top:57.92px" class="cls_002"><span class="cls_002">Почетно стање</span></div>
<div style="position:absolute;left:342.96px;top:59.84px" class="cls_002"><span class="cls_002">број</span></div>
<div style="position:absolute;left:380.88px;top:60.80px" class="cls_002"><span class="cls_002">година</span></div>
<div style="position:absolute;left:54.00px;top:79.76px" class="cls_002"><span class="cls_002">1</span></div>
<div style="position:absolute;left:194.40px;top:79.76px" class="cls_002"><span class="cls_002">2</span></div>
<div style="position:absolute;left:319.92px;top:79.76px" class="cls_002"><span class="cls_002">3</span></div>
<div style="position:absolute;left:349.92px;top:79.76px" class="cls_002"><span class="cls_002">4</span></div>
<div style="position:absolute;left:393.84px;top:79.76px" class="cls_002"><span class="cls_002">5</span></div>
<div style="position:absolute;left:453.84px;top:79.76px" class="cls_002"><span class="cls_002">6</span></div>
<div style="position:absolute;left:516.96px;top:79.76px" class="cls_002"><span class="cls_002">7</span></div>
<div style="position:absolute;left:34.56px;top:92.24px" class="cls_006"><span class="cls_006">део 043, део</span></div>
<div style="position:absolute;left:90.00px;top:91.76px" class="cls_002"><span class="cls_002">5. Дугорочни пласмани матичним зависним и осталим</span></div>
<div style="position:absolute;left:312.72px;top:95.84px" class="cls_002"><span class="cls_002">0029</span></div>
<div style="position:absolute;left:340px;top:95.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00029_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:95.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00029_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:95.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00029_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:95.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00029_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:33.60px;top:99.20px" class="cls_006"><span class="cls_006">044 и део 049</span></div>
<div style="position:absolute;left:99.12px;top:99.92px" class="cls_002"><span class="cls_002">повезаним правним лицима у иностранству</span></div>
<div style="position:absolute;left:33.60px;top:115.04px" class="cls_006"><span class="cls_006">045 и део 049</span></div>
<div style="position:absolute;left:90.00px;top:114.80px" class="cls_002"><span class="cls_002">6. Дугорочни пласмани у земљи</span></div>
<div style="position:absolute;left:312.72px;top:114.80px" class="cls_002"><span class="cls_002">0030</span></div>
<div style="position:absolute;left:340px;top:114.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00030_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:114.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00030_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:114.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00030_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:114.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00030_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:33.60px;top:129.20px" class="cls_006"><span class="cls_006">045 и део 049</span></div>
<div style="position:absolute;left:90.00px;top:128.96px" class="cls_002"><span class="cls_002">7. Дугорочни пласмани у иностранству</span></div>
<div style="position:absolute;left:312.72px;top:127.76px" class="cls_002"><span class="cls_002">0031</span></div>
<div style="position:absolute;left:340px;top:127.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00031_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:127.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00031_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:127.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00031_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:127.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00031_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:33.60px;top:143.12px" class="cls_006"><span class="cls_006">046 и део 049</span></div>
<div style="position:absolute;left:90.00px;top:142.88px" class="cls_002"><span class="cls_002">8. Хартије од вредности које се држе до доспећа</span></div>
<div style="position:absolute;left:312.72px;top:141.92px" class="cls_002"><span class="cls_002">0032</span></div>
<div style="position:absolute;left:340px;top:141.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00032_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:141.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00032_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:141.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00032_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:141.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00032_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:33.60px;top:157.04px" class="cls_006"><span class="cls_006">048 и део 049</span></div>
<div style="position:absolute;left:90.00px;top:156.80px" class="cls_002"><span class="cls_002">9. Остали дугорочни пласмани</span></div>
<div style="position:absolute;left:312.72px;top:156.80px" class="cls_002"><span class="cls_002">0033</span></div>
<div style="position:absolute;left:340px;top:156.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00033_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:156.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00033_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:156.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00033_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:156.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00033_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:90.00px;top:169.76px" class="cls_002"><span class="cls_002">V. ДУГОРОЧНА ПОТРАЖИВАЊА</span></div>
<div style="position:absolute;left:52.32px;top:176.00px" class="cls_006"><span class="cls_006">05</span></div>
<div style="position:absolute;left:312.72px;top:173.84px" class="cls_002"><span class="cls_002">0034</span></div>
<div style="position:absolute;left:340px;top:173.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00034_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:173.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00034_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:173.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00034_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:173.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00034_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:99.12px;top:177.92px" class="cls_002"><span class="cls_002">(0035+0036+0037+0038+0039+0040+0041)</span></div>
<div style="position:absolute;left:33.60px;top:193.04px" class="cls_006"><span class="cls_006">050 и део 059</span></div>
<div style="position:absolute;left:90.00px;top:191.84px" class="cls_002"><span class="cls_002">1. Потраживања од матичног и зависних правних лица</span></div>
<div style="position:absolute;left:312.72px;top:192.80px" class="cls_002"><span class="cls_002">0035</span></div>
<div style="position:absolute;left:340px;top:192.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00035_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:192.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00035_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:192.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00035_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:192.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00035_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:33.60px;top:207.20px" class="cls_006"><span class="cls_006">051 и део 059</span></div>
<div style="position:absolute;left:90.00px;top:206.96px" class="cls_002"><span class="cls_002">2. Потраживања од осталих правних лица</span></div>
<div style="position:absolute;left:312.72px;top:206.96px" class="cls_002"><span class="cls_002">0036</span></div>
<div style="position:absolute;left:340px;top:206.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00036_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:206.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00036_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:206.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00036_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:206.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00036_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:33.60px;top:221.12px" class="cls_006"><span class="cls_006">052 и део 059</span></div>
<div style="position:absolute;left:90.00px;top:220.88px" class="cls_002"><span class="cls_002">3. Потраживања по основу продаје на робни кредит</span></div>
<div style="position:absolute;left:312.72px;top:220.88px" class="cls_002"><span class="cls_002">0037</span></div>
<div style="position:absolute;left:340px;top:220.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00037_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:220.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00037_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:220.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00037_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:220.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00037_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:90.00px;top:232.88px" class="cls_002"><span class="cls_002">4. Потраживања за продају по уговорима о</span></div>
<div style="position:absolute;left:33.60px;top:239.12px" class="cls_006"><span class="cls_006">053 и део 059</span></div>
<div style="position:absolute;left:312.72px;top:237.92px" class="cls_002"><span class="cls_002">0038</span></div>
<div style="position:absolute;left:99.12px;top:241.76px" class="cls_002"><span class="cls_002">финансијском лизингу</span></div>
<div style="position:absolute;left:340px;top:241.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00038_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:241.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00038_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:241.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00038_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:241.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00038_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:33.60px;top:256.16px" class="cls_006"><span class="cls_006">054 и део 059</span></div>
<div style="position:absolute;left:90.00px;top:255.92px" class="cls_002"><span class="cls_002">5. Потраживања на основу јемства</span></div>
<div style="position:absolute;left:312.72px;top:255.92px" class="cls_002"><span class="cls_002">0039</span></div>
<div style="position:absolute;left:340px;top:255.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00039_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:255.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00039_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:255.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00039_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:255.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00039_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:33.60px;top:271.04px" class="cls_006"><span class="cls_006">055 и део 059</span></div>
<div style="position:absolute;left:90.00px;top:269.84px" class="cls_002"><span class="cls_002">6. Спорна и сумњива потраживања</span></div>
<div style="position:absolute;left:312.72px;top:270.80px" class="cls_002"><span class="cls_002">0040</span></div>
<div style="position:absolute;left:340px;top:270.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00040_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:270.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00040_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:270.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00040_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:270.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00040_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:33.60px;top:285.20px" class="cls_006"><span class="cls_006">056 и део 059</span></div>
<div style="position:absolute;left:90.00px;top:283.76px" class="cls_002"><span class="cls_002">7. Остала дугорочна потраживања</span></div>
<div style="position:absolute;left:312.72px;top:284.96px" class="cls_002"><span class="cls_002">0041</span></div>
<div style="position:absolute;left:340px;top:284.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00041_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:284.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00041_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:284.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00041_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:284.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00041_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:50.40px;top:299.12px" class="cls_006"><span class="cls_006">288</span></div>
<div style="position:absolute;left:90.00px;top:298.88px" class="cls_005"><span class="cls_005">В. ОДЛОЖЕНА ПОРЕСКА СРЕДСТВА</span></div>
<div style="position:absolute;left:312.72px;top:298.88px" class="cls_002"><span class="cls_002">0042</span></div>
<div style="position:absolute;left:340px;top:298.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00042_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:298.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00042_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:298.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00042_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:298.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00042_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:90.00px;top:310.88px" class="cls_005"><span class="cls_005">Г. ОБРТНА ИМОВИНА (0044+0051+0059+0060+</span></div>
<div style="position:absolute;left:312.72px;top:315.92px" class="cls_002"><span class="cls_002">0043</span></div>
<div style="position:absolute;left:99.12px;top:320.96px" class="cls_002"><span class="cls_002">0061+0062+0068+0069+0070)</span></div>
<div style="position:absolute;left:340px;top:320.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00043_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:320.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00043_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:320.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00043_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:320.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00043_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:90.00px;top:331.76px" class="cls_002"><span class="cls_002">I. ЗАЛИХЕ</span></div>
<div style="position:absolute;left:43.44px;top:338.00px" class="cls_006"><span class="cls_006">Класа 1</span></div>
<div style="position:absolute;left:312.72px;top:337.76px" class="cls_002"><span class="cls_002">0044</span></div>
<div style="position:absolute;left:94.08px;top:341.84px" class="cls_002"><span class="cls_002">(0045+0046+0047+0048+0049+0050)</span></div>
<div style="position:absolute;left:340px;top:341.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00044_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:341.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00044_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:341.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00044_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:341.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00044_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:52.32px;top:355.04px" class="cls_006"><span class="cls_006">10</span></div>
<div style="position:absolute;left:90.00px;top:354.80px" class="cls_002"><span class="cls_002">1. Материјал, резервни делови, алат и ситан инвентар</span></div>
<div style="position:absolute;left:312.72px;top:354.80px" class="cls_002"><span class="cls_002">0045</span></div>
<div style="position:absolute;left:340px;top:354.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00045_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:354.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00045_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:354.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00045_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:354.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00045_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:52.32px;top:370.16px" class="cls_006"><span class="cls_006">11</span></div>
<div style="position:absolute;left:90.00px;top:368.96px" class="cls_002"><span class="cls_002">2. Недовршена производња и недовршене услуге</span></div>
<div style="position:absolute;left:312.72px;top:369.92px" class="cls_002"><span class="cls_002">0046</span></div>
<div style="position:absolute;left:340px;top:369.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00046_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:369.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00046_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:369.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00046_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:369.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00046_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:52.32px;top:384.08px" class="cls_006"><span class="cls_006">12</span></div>
<div style="position:absolute;left:90.00px;top:382.88px" class="cls_002"><span class="cls_002">3. Готови производи</span></div>
<div style="position:absolute;left:312.72px;top:383.84px" class="cls_002"><span class="cls_002">0047</span></div>
<div style="position:absolute;left:340px;top:383.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00047_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:383.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00047_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:383.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00047_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:383.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00047_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:52.32px;top:398.00px" class="cls_006"><span class="cls_006">13</span></div>
<div style="position:absolute;left:90.00px;top:397.76px" class="cls_002"><span class="cls_002">4. Роба</span></div>
<div style="position:absolute;left:312.72px;top:397.76px" class="cls_002"><span class="cls_002">0048</span></div>
<div style="position:absolute;left:340px;top:397.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00048_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:397.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00048_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:397.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00048_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:397.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00048_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:52.32px;top:412.16px" class="cls_006"><span class="cls_006">14</span></div>
<div style="position:absolute;left:90.00px;top:411.92px" class="cls_002"><span class="cls_002">5. Стална средства намењена продаји</span></div>
<div style="position:absolute;left:312.72px;top:411.92px" class="cls_002"><span class="cls_002">0049</span></div>
<div style="position:absolute;left:340px;top:411.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00049_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:411.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00049_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:411.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00049_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:411.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00049_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:52.32px;top:426.08px" class="cls_006"><span class="cls_006">15</span></div>
<div style="position:absolute;left:90.00px;top:425.84px" class="cls_002"><span class="cls_002">6. Плаћени аванси за залихе и услуге</span></div>
<div style="position:absolute;left:312.72px;top:425.84px" class="cls_002"><span class="cls_002">0050</span></div>
<div style="position:absolute;left:340px;top:425.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00050_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:425.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00050_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:425.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00050_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:425.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00050_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:90.00px;top:438.80px" class="cls_002"><span class="cls_002">II. ПОТРАЖИВАЊА ПО ОСНОВУ ПРОДАЈЕ</span></div>
<div style="position:absolute;left:52.32px;top:445.04px" class="cls_006"><span class="cls_006">20</span></div>
<div style="position:absolute;left:312.72px;top:442.88px" class="cls_002"><span class="cls_002">0051</span></div>
<div style="position:absolute;left:97.20px;top:446.96px" class="cls_002"><span class="cls_002">(0052+0053+0054+0055+0056+0057+0058)</span></div>
<div style="position:absolute;left:340px;top:446.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00051_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:446.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00051_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:446.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00051_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:446.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00051_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:33.60px;top:462.08px" class="cls_006"><span class="cls_006">200 и део 209</span></div>
<div style="position:absolute;left:90.00px;top:460.88px" class="cls_002"><span class="cls_002">1. Купци у земљи - матична и зависна правна лица</span></div>
<div style="position:absolute;left:312.72px;top:461.84px" class="cls_002"><span class="cls_002">0052</span></div>
<div style="position:absolute;left:340px;top:461.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00052_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:461.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00052_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:461.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00052_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:461.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00052_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:90.00px;top:473.84px" class="cls_002"><span class="cls_002">2. Купци у иностранству - матична и зависна</span></div>
<div style="position:absolute;left:33.60px;top:480.08px" class="cls_006"><span class="cls_006">201 и део 209</span></div>
<div style="position:absolute;left:312.72px;top:478.88px" class="cls_002"><span class="cls_002">0053</span></div>
<div style="position:absolute;left:100.08px;top:481.76px" class="cls_002"><span class="cls_002">правна лица</span></div>
<div style="position:absolute;left:340px;top:478.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00053_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:478.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00053_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:478.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00053_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:478.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00053_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:33.60px;top:497.12px" class="cls_006"><span class="cls_006">202 и део 209</span></div>
<div style="position:absolute;left:90.00px;top:496.88px" class="cls_002"><span class="cls_002">3. Купци у земљи - остала повезана правна лица</span></div>
<div style="position:absolute;left:312.72px;top:494.96px" class="cls_002"><span class="cls_002">0054</span></div>
<div style="position:absolute;left:340px;top:494.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00054_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:494.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00054_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:494.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00054_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:494.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00054_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:90.00px;top:508.88px" class="cls_002"><span class="cls_002">4. Купци у иностранству - остала повезана</span></div>
<div style="position:absolute;left:33.60px;top:515.12px" class="cls_006"><span class="cls_006">203 и део 209</span></div>
<div style="position:absolute;left:312.72px;top:513.92px" class="cls_002"><span class="cls_002">0055</span></div>
<div style="position:absolute;left:100.08px;top:517.76px" class="cls_002"><span class="cls_002">правна лица</span></div>
<div style="position:absolute;left:340px;top:513.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00055_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:513.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00055_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:513.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00055_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:513.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00055_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:33.60px;top:532.16px" class="cls_006"><span class="cls_006">204 и део 209</span></div>
<div style="position:absolute;left:90.00px;top:531.92px" class="cls_002"><span class="cls_002">5. Купци у земљи</span></div>
<div style="position:absolute;left:312.72px;top:530.72px" class="cls_002"><span class="cls_002">0056</span></div>
<div style="position:absolute;left:340px;top:530.72px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00056_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:530.72px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00056_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:530.72px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00056_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:530.72px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00056_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:33.60px;top:546.08px" class="cls_006"><span class="cls_006">205 и део 209</span></div>
<div style="position:absolute;left:90.00px;top:545.84px" class="cls_002"><span class="cls_002">6. Купци у иностранству</span></div>
<div style="position:absolute;left:312.72px;top:545.84px" class="cls_002"><span class="cls_002">0057</span></div>
<div style="position:absolute;left:340px;top:545.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00057_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:545.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00057_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:545.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00057_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:545.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00057_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:33.60px;top:560.96px" class="cls_006"><span class="cls_006">206 и део 209</span></div>
<div style="position:absolute;left:90.00px;top:559.76px" class="cls_002"><span class="cls_002">7. Остала потраживања по основу продаје</span></div>
<div style="position:absolute;left:312.72px;top:560.72px" class="cls_002"><span class="cls_002">0058</span></div>
<div style="position:absolute;left:340px;top:560.72px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00058_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:560.72px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00058_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:560.72px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00058_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:560.72px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00058_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:52.32px;top:575.12px" class="cls_006"><span class="cls_006">21</span></div>
<div style="position:absolute;left:90.00px;top:573.92px" class="cls_002"><span class="cls_002">III. Потраживања из специфичних послова</span></div>
<div style="position:absolute;left:312.72px;top:574.88px" class="cls_002"><span class="cls_002">0059</span></div>
<div style="position:absolute;left:340px;top:574.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00059_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:574.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00059_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:574.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00059_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:574.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00059_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:52.32px;top:589.04px" class="cls_006"><span class="cls_006">22</span></div>
<div style="position:absolute;left:90.00px;top:588.80px" class="cls_002"><span class="cls_002">IV. Друга потраживања</span></div>
<div style="position:absolute;left:312.72px;top:588.80px" class="cls_002"><span class="cls_002">0060</span></div>
<div style="position:absolute;left:340px;top:588.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00060_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:588.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00060_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:588.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00060_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:588.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00060_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:90.00px;top:600.80px" class="cls_002"><span class="cls_002">V. Финансијска средства која се вреднују по фер</span></div>
<div style="position:absolute;left:50.40px;top:607.04px" class="cls_006"><span class="cls_006">236</span></div>
<div style="position:absolute;left:312.72px;top:605.84px" class="cls_002"><span class="cls_002">0061</span></div>
<div style="position:absolute;left:101.04px;top:609.92px" class="cls_002"><span class="cls_002">вредности кроз биланс успеха</span></div>
<div style="position:absolute;left:340px;top:605.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00061_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:605.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00061_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:605.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00061_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:605.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00061_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:42.00px;top:624.08px" class="cls_006"><span class="cls_006">(23 осим</span></div>
<div style="position:absolute;left:90.00px;top:623.84px" class="cls_002"><span class="cls_002">VI. Краткорочни финансијски пласмани</span></div>
<div style="position:absolute;left:312.72px;top:627.92px" class="cls_002"><span class="cls_002">0062</span></div>
<div style="position:absolute;left:40.08px;top:634.16px" class="cls_006"><span class="cls_006">236) - 237</span></div>
<div style="position:absolute;left:101.04px;top:631.76px" class="cls_002"><span class="cls_002">(0063+0064+0065+0066+0067)</span></div>
<div style="position:absolute;left:340px;top:627.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00062_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:627.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00062_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:627.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00062_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:627.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00062_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:90.00px;top:646.88px" class="cls_002"><span class="cls_002">1. Краткорочни кредити и пласмани -</span></div>
<div style="position:absolute;left:33.60px;top:653.12px" class="cls_006"><span class="cls_006">230 и део 239</span></div>
<div style="position:absolute;left:312.72px;top:650.72px" class="cls_002"><span class="cls_002">0063</span></div>
<div style="position:absolute;left:99.12px;top:654.80px" class="cls_002"><span class="cls_002">матична и зависна правна лица</span></div>
<div style="position:absolute;left:340px;top:650.72px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00063_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:650.72px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00063_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:650.72px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00063_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:650.72px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00063_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:90.00px;top:667.76px" class="cls_002"><span class="cls_002">2. Краткорочни кредити и пласмани -</span></div>
<div style="position:absolute;left:34.56px;top:674.00px" class="cls_006"><span class="cls_006">231и део 239</span></div>
<div style="position:absolute;left:312.72px;top:671.84px" class="cls_002"><span class="cls_002">0064</span></div>
<div style="position:absolute;left:100.08px;top:675.92px" class="cls_002"><span class="cls_002">остала повезана правна лица</span></div>
<div style="position:absolute;left:340px;top:671.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00064_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:671.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00064_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:671.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00064_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:671.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00064_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:33.60px;top:691.04px" class="cls_006"><span class="cls_006">232 и део 239</span></div>
<div style="position:absolute;left:90.00px;top:689.84px" class="cls_002"><span class="cls_002">3. Краткоточни кредити и зајмови у земљи</span></div>
<div style="position:absolute;left:312.72px;top:690.80px" class="cls_002"><span class="cls_002">0065</span></div>
<div style="position:absolute;left:340px;top:690.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00065_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:690.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00065_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:690.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00065_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:690.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00065_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:33.60px;top:704.96px" class="cls_006"><span class="cls_006">233 и део 239</span></div>
<div style="position:absolute;left:90.00px;top:704.72px" class="cls_002"><span class="cls_002">4. Краткоточни кредити и зајмови у иностранству</span></div>
<div style="position:absolute;left:312.72px;top:704.72px" class="cls_002"><span class="cls_002">0066</span></div>
<div style="position:absolute;left:340px;top:704.72px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00066_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:704.72px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00066_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:704.72px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00066_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:704.72px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00066_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:36.72px;top:719.12px" class="cls_006"><span class="cls_006">234,235,238</span></div>
<div style="position:absolute;left:90.00px;top:721.76px" class="cls_002"><span class="cls_002">5. Остали краткорочни финансијски пласмани</span></div>
<div style="position:absolute;left:312.72px;top:721.76px" class="cls_002"><span class="cls_002">0067</span></div>
<div style="position:absolute;left:340px;top:721.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00067_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:721.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00067_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:721.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00067_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:721.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00067_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:40.56px;top:728.00px" class="cls_006"><span class="cls_006">и део 239</span></div>
<div style="position:absolute;left:52.32px;top:740.00px" class="cls_006"><span class="cls_006">24</span></div>
<div style="position:absolute;left:90.00px;top:739.76px" class="cls_002"><span class="cls_002">VII. ГОТОВИНСКИ ЕКВИВАЛЕНТИ И ГОТОВИНА</span></div>
<div style="position:absolute;left:312.72px;top:739.76px" class="cls_002"><span class="cls_002">0068</span></div>
<div style="position:absolute;left:340px;top:739.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00068_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:739.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00068_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:739.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00068_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:739.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00068_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:52.32px;top:754.16px" class="cls_006"><span class="cls_006">27</span></div>
<div style="position:absolute;left:90.00px;top:753.92px" class="cls_002"><span class="cls_002">VIII. ПОРЕЗ НА ДОДАТУ ВРЕДНОСТ</span></div>
<div style="position:absolute;left:312.72px;top:753.92px" class="cls_002"><span class="cls_002">0069</span></div>
<div style="position:absolute;left:340px;top:753.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00069_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:753.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00069_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:753.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00069_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:753.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00069_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:36.48px;top:769.04px" class="cls_006"><span class="cls_006">28 осим 288</span></div>
<div style="position:absolute;left:90.00px;top:767.84px" class="cls_002"><span class="cls_002">IX. АКТИВНА ВРЕМЕНСКА РАЗГРАНИЧЕЊА</span></div>
<div style="position:absolute;left:312.72px;top:768.80px" class="cls_002"><span class="cls_002">0070</span></div>
<div style="position:absolute;left:340px;top:768.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00070_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:768.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00070_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:768.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00070_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:768.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00070_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

</div>
<div style="position:absolute;left:50%;margin-left:-297px;top:1704px;width:595px;height:842px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">

<img src="{{asset("bil_img/background3.jpg")}}" width=595 height=842>
<div style="position:absolute;left:448.56px;top:30.80px" class="cls_002"><span class="cls_002">Износ</span></div>
<div style="position:absolute;left:44.88px;top:38.96px" class="cls_002"><span class="cls_002">Група</span></div>
<div style="position:absolute;left:341.76px;top:39.92px" class="cls_002"><span class="cls_002">Напо-</span></div>
<div style="position:absolute;left:452.64px;top:44.96px" class="cls_002"><span class="cls_002">Претходна година</span></div>
<div style="position:absolute;left:41.52px;top:48.80px" class="cls_002"><span class="cls_002">рачуна,</span></div>
<div style="position:absolute;left:166.56px;top:50.96px" class="cls_002"><span class="cls_002">П О З И Ц И Ј А</span></div>
<div style="position:absolute;left:312.96px;top:50.96px" class="cls_002"><span class="cls_002">АОП</span></div>
<div style="position:absolute;left:341.28px;top:50.00px" class="cls_002"><span class="cls_002">мена</span></div>
<div style="position:absolute;left:380.64px;top:50.96px" class="cls_002"><span class="cls_002">Текућа</span></div>
<div style="position:absolute;left:44.88px;top:58.88px" class="cls_002"><span class="cls_002">рачун</span></div>
<div style="position:absolute;left:430.80px;top:57.92px" class="cls_002"><span class="cls_002">Крајње стање</span></div>
<div style="position:absolute;left:491.28px;top:57.92px" class="cls_002"><span class="cls_002">Почетно стање</span></div>
<div style="position:absolute;left:342.96px;top:59.84px" class="cls_002"><span class="cls_002">број</span></div>
<div style="position:absolute;left:380.88px;top:60.80px" class="cls_002"><span class="cls_002">година</span></div>
<div style="position:absolute;left:54.00px;top:79.76px" class="cls_002"><span class="cls_002">1</span></div>
<div style="position:absolute;left:194.40px;top:79.76px" class="cls_002"><span class="cls_002">2</span></div>
<div style="position:absolute;left:319.92px;top:79.76px" class="cls_002"><span class="cls_002">3</span></div>
<div style="position:absolute;left:349.92px;top:79.76px" class="cls_002"><span class="cls_002">4</span></div>
<div style="position:absolute;left:393.84px;top:79.76px" class="cls_002"><span class="cls_002">5</span></div>
<div style="position:absolute;left:453.84px;top:79.76px" class="cls_002"><span class="cls_002">6</span></div>
<div style="position:absolute;left:516.96px;top:79.76px" class="cls_002"><span class="cls_002">7</span></div>
<div style="position:absolute;left:90.00px;top:91.76px" class="cls_005"><span class="cls_005">Д. УКУПНА АКТИВА = ПОСЛОВНА ИМОВИИНА</span></div>
<div style="position:absolute;left:312.72px;top:95.84px" class="cls_002"><span class="cls_002">0071</span></div>
<div style="position:absolute;left:100.08px;top:99.92px" class="cls_005"><span class="cls_005">(0001+0002+0042+0043)</span></div>
<div style="position:absolute;left:340px;top:95.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00071_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:95.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00071_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:95.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00071_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:95.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00071_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:52.32px;top:115.04px" class="cls_006"><span class="cls_006">88</span></div>
<div style="position:absolute;left:90.00px;top:114.80px" class="cls_005"><span class="cls_005">Ђ. ВАНБИЛАНСНА АКТИВА</span></div>
<div style="position:absolute;left:312.72px;top:114.80px" class="cls_002"><span class="cls_002">0072</span></div>
<div style="position:absolute;left:340px;top:114.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00072_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:114.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00072_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:114.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00072_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:114.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="00072_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:90.00px;top:128.96px" class="cls_005"><span class="cls_005">ПАСИВА</span></div>
<div style="position:absolute;left:90.00px;top:140.96px" class="cls_005"><span class="cls_005">А. КАПИТАЛ</span></div>
<div style="position:absolute;left:90.00px;top:150.80px" class="cls_002"><span class="cls_002">(0402+0411-0412+0413+0414+0415-0416+0417+</span></div>
<div style="position:absolute;left:312.72px;top:151.76px" class="cls_002"><span class="cls_002">0401</span></div>
<div style="position:absolute;left:90.00px;top:160.88px" class="cls_002"><span class="cls_002">0420-0421) >= 0 = (0071-0424-0441-0442)</span></div>
<div style="position:absolute;left:340px;top:151.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0401_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:151.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0401_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:151.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0401_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:151.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0401_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:90.00px;top:173.84px" class="cls_002"><span class="cls_002">I. ОСНОВНИ КАПИТАЛ</span></div>
<div style="position:absolute;left:52.32px;top:180.08px" class="cls_006"><span class="cls_006">30</span></div>
<div style="position:absolute;left:312.72px;top:178.88px" class="cls_002"><span class="cls_002">0402</span></div>
<div style="position:absolute;left:97.20px;top:181.76px" class="cls_002"><span class="cls_002">(0403+0404+0405+0406+0407+0408+0409+0410)</span></div>
<div style="position:absolute;left:340px;top:178.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0402_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:178.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0402_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:178.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0402_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:178.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0402_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:50.40px;top:197.12px" class="cls_006"><span class="cls_006">300</span></div>
<div style="position:absolute;left:90.00px;top:196.88px" class="cls_002"><span class="cls_002">1. Акцијски капитал</span></div>
<div style="position:absolute;left:312.72px;top:196.88px" class="cls_002"><span class="cls_002">0403</span></div>
<div style="position:absolute;left:340px;top:196.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0403_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:196.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0403_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:196.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0403_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:196.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0403_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:50.40px;top:211.04px" class="cls_006"><span class="cls_006">301</span></div>
<div style="position:absolute;left:90.00px;top:210.80px" class="cls_002"><span class="cls_002">2. Удели друштава са ограниченом одговорношћу</span></div>
<div style="position:absolute;left:312.72px;top:210.80px" class="cls_002"><span class="cls_002">0404</span></div>
<div style="position:absolute;left:340px;top:210.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0404_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:210.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0404_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:210.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0404_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:210.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0404_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:50.40px;top:225.20px" class="cls_006"><span class="cls_006">302</span></div>
<div style="position:absolute;left:90.00px;top:224.96px" class="cls_002"><span class="cls_002">3. Улози</span></div>
<div style="position:absolute;left:312.72px;top:224.96px" class="cls_002"><span class="cls_002">0405</span></div>
<div style="position:absolute;left:340px;top:224.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0405_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:224.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0405_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:224.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0405_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:224.96px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0405_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:50.40px;top:239.12px" class="cls_006"><span class="cls_006">303</span></div>
<div style="position:absolute;left:90.00px;top:238.88px" class="cls_002"><span class="cls_002">4. Државни капитал</span></div>
<div style="position:absolute;left:312.72px;top:238.88px" class="cls_002"><span class="cls_002">0406</span></div>
<div style="position:absolute;left:340px;top:238.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0406_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:238.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0406_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:238.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0406_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:238.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0406_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:50.40px;top:254.00px" class="cls_006"><span class="cls_006">304</span></div>
<div style="position:absolute;left:90.00px;top:252.80px" class="cls_002"><span class="cls_002">5. Друштвени капитал</span></div>
<div style="position:absolute;left:312.72px;top:253.76px" class="cls_002"><span class="cls_002">0407</span></div>
<div style="position:absolute;left:340px;top:253.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0407_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:253.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0407_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:253.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0407_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:253.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0407_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:50.40px;top:268.16px" class="cls_006"><span class="cls_006">305</span></div>
<div style="position:absolute;left:90.00px;top:266.96px" class="cls_002"><span class="cls_002">6. Задружни удели</span></div>
<div style="position:absolute;left:312.72px;top:267.92px" class="cls_002"><span class="cls_002">0408</span></div>
<div style="position:absolute;left:340px;top:267.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0408_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:267.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0408_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:267.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0408_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:267.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0408_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:50.40px;top:282.08px" class="cls_006"><span class="cls_006">306</span></div>
<div style="position:absolute;left:90.00px;top:281.84px" class="cls_002"><span class="cls_002">7. Емисиона премија</span></div>
<div style="position:absolute;left:312.72px;top:281.84px" class="cls_002"><span class="cls_002">0409</span></div>
<div style="position:absolute;left:340px;top:281.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0409_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:281.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0409_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:281.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0409_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:281.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0409_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:50.40px;top:296.00px" class="cls_006"><span class="cls_006">309</span></div>
<div style="position:absolute;left:90.00px;top:295.76px" class="cls_002"><span class="cls_002">8. Остали основни капитал</span></div>
<div style="position:absolute;left:312.72px;top:295.76px" class="cls_002"><span class="cls_002">0410</span></div>
<div style="position:absolute;left:340px;top:295.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0410_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:295.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0410_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:295.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0410_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:295.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0410_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:52.32px;top:310.16px" class="cls_006"><span class="cls_006">31</span></div>
<div style="position:absolute;left:90.00px;top:309.92px" class="cls_002"><span class="cls_002">II. УПИСАНИ А НЕУПЛАЋЕНИ КАПИТАЛ</span></div>
<div style="position:absolute;left:312.72px;top:309.92px" class="cls_002"><span class="cls_002">0411</span></div>
<div style="position:absolute;left:340px;top:309.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0411_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:309.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0411_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:309.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0411_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:309.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0411_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:40.08px;top:324.08px" class="cls_006"><span class="cls_006">047 И 237</span></div>
<div style="position:absolute;left:90.00px;top:323.84px" class="cls_002"><span class="cls_002">III. ОТКУПЉЕНЕ СОПСТВЕНЕ АКЦИЈЕ</span></div>
<div style="position:absolute;left:312.72px;top:323.84px" class="cls_002"><span class="cls_002">0412</span></div>
<div style="position:absolute;left:340px;top:323.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0412_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:323.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0412_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:323.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0412_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:323.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0412_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:52.32px;top:338.00px" class="cls_006"><span class="cls_006">32</span></div>
<div style="position:absolute;left:90.00px;top:337.76px" class="cls_002"><span class="cls_002">IV. РЕЗЕРВЕ</span></div>
<div style="position:absolute;left:312.72px;top:337.76px" class="cls_002"><span class="cls_002">0413</span></div>
<div style="position:absolute;left:340px;top:337.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0413_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:337.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0413_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:337.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0413_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:337.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0413_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:90.00px;top:350.96px" class="cls_002"><span class="cls_002">V. РЕВАЛОРИЗАЦИОНЕ РЕЗЕРВЕ ПО ОСНОВУ</span></div>
<div style="position:absolute;left:50.40px;top:362.00px" class="cls_006"><span class="cls_006">330</span></div>
<div style="position:absolute;left:99.12px;top:360.80px" class="cls_002"><span class="cls_002">РЕВАЛОРИЗАЦИЈЕ НЕМАТЕРИЈАЛНЕ ИМОВИНЕ,</span></div>
<div style="position:absolute;left:312.72px;top:360.80px" class="cls_002"><span class="cls_002">0414</span></div>
<div style="position:absolute;left:99.12px;top:370.88px" class="cls_002"><span class="cls_002">НЕКРЕТНИНА, ПОСТРОЈЕЊА И ОПРЕМЕ</span></div>
<div style="position:absolute;left:340px;top:360.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0414_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:360.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0414_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:360.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0414_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:360.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0414_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:90.00px;top:381.92px" class="cls_002"><span class="cls_002">VI. НЕРЕАЛИЗОВАНИ ДОБИЦИ ПО ОСНОВУ ХАРТИЈА</span></div>
<div style="position:absolute;left:100.08px;top:391.76px" class="cls_002"><span class="cls_002">ОД ВРЕДНОСТИ И ДРУГИХ КОМПОНЕНТИ</span></div>
<div style="position:absolute;left:36.48px;top:398.00px" class="cls_006"><span class="cls_006">33 осим 330</span></div>
<div style="position:absolute;left:312.72px;top:395.84px" class="cls_002"><span class="cls_002">0415</span></div>
<div style="position:absolute;left:100.08px;top:401.84px" class="cls_002"><span class="cls_002">ОСТАЛОГ СВЕОБУХВАТНОГ РЕЗУЛТАТА</span></div>
<div style="position:absolute;left:100.08px;top:409.76px" class="cls_002"><span class="cls_002">(потражна салда рачуна групе 33 осим 330)</span></div>
<div style="position:absolute;left:340px;top:395.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0415_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:395.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0415_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:395.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0415_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:395.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0415_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:90.00px;top:422.96px" class="cls_002"><span class="cls_002">VII. НЕРЕАЛИЗОВАНИ ГУБИЦИ ПО ОСНОВУ ХАРТИЈА</span></div>
<div style="position:absolute;left:101.04px;top:432.80px" class="cls_002"><span class="cls_002">ОД ВРЕДНОСТИ И ДРУГИХ КОМПОНЕНТИ</span></div>
<div style="position:absolute;left:36.48px;top:439.04px" class="cls_006"><span class="cls_006">33 осим 330</span></div>
<div style="position:absolute;left:312.72px;top:436.88px" class="cls_002"><span class="cls_002">0416</span></div>
<div style="position:absolute;left:101.04px;top:442.88px" class="cls_002"><span class="cls_002">ОСТАЛОГ СВЕОБУХВАТНОГ РЕЗУЛТАТА</span></div>
<div style="position:absolute;left:101.04px;top:450.80px" class="cls_002"><span class="cls_002">(дуговна салда рачуна групе 33 осим 330)</span></div>
<div style="position:absolute;left:340px;top:436.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0416_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:436.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0416_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:436.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0416_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:436.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0416_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:90.00px;top:463.76px" class="cls_002"><span class="cls_002">VIII. НЕРАСПОРЕЂЕНИ ДОБИТАК</span></div>
<div style="position:absolute;left:52.32px;top:470.00px" class="cls_006"><span class="cls_006">34</span></div>
<div style="position:absolute;left:312.72px;top:469.76px" class="cls_002"><span class="cls_002">0417</span></div>
<div style="position:absolute;left:103.20px;top:473.84px" class="cls_002"><span class="cls_002">(0418+0419)</span></div>
<div style="position:absolute;left:340px;top:469.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0417_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:469.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0417_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:469.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0417_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:469.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0417_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:50.40px;top:487.04px" class="cls_006"><span class="cls_006">340</span></div>
<div style="position:absolute;left:90.00px;top:486.80px" class="cls_002"><span class="cls_002">1. Нераспоређени добитак ранијих година</span></div>
<div style="position:absolute;left:312.72px;top:486.80px" class="cls_002"><span class="cls_002">0418</span></div>
<div style="position:absolute;left:340px;top:486.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0418_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:486.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0418_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:486.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0418_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:486.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0418_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:50.40px;top:501.20px" class="cls_006"><span class="cls_006">341</span></div>
<div style="position:absolute;left:90.00px;top:500.72px" class="cls_002"><span class="cls_002">2. Нераспоређени добитак текуће године</span></div>
<div style="position:absolute;left:312.72px;top:500.72px" class="cls_002"><span class="cls_002">0419</span></div>
<div style="position:absolute;left:340px;top:500.72px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0419_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:500.72px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0419_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:500.72px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0419_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:500.72px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0419_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:90.00px;top:514.88px" class="cls_002"><span class="cls_002">IX. УЧЕШЋЕ БЕЗ ПРАВА КОНТРОЛЕ</span></div>
<div style="position:absolute;left:312.72px;top:514.88px" class="cls_002"><span class="cls_002">0420</span></div>
<div style="position:absolute;left:340px;top:514.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0420_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:514.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0420_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:514.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0420_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:514.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0420_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:52.32px;top:529.04px" class="cls_006"><span class="cls_006">35</span></div>
<div style="position:absolute;left:90.00px;top:528.80px" class="cls_002"><span class="cls_002">X. ГУБИТАК</span></div>
<div style="position:absolute;left:256.32px;top:528.80px" class="cls_002"><span class="cls_002">(0422+0423)</span></div>
<div style="position:absolute;left:312.72px;top:528.80px" class="cls_002"><span class="cls_002">0421</span></div>
<div style="position:absolute;left:340px;top:528.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0421_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:528.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0421_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:528.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0421_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:528.80px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0421_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:50.40px;top:544.16px" class="cls_006"><span class="cls_006">350</span></div>
<div style="position:absolute;left:90.00px;top:542.72px" class="cls_002"><span class="cls_002">1. Губитак ранијих година</span></div>
<div style="position:absolute;left:312.72px;top:543.92px" class="cls_002"><span class="cls_002">0422</span></div>
<div style="position:absolute;left:340px;top:543.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0422_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:543.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0422_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:543.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0422_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:543.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0422_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:50.40px;top:558.08px" class="cls_006"><span class="cls_006">351</span></div>
<div style="position:absolute;left:90.00px;top:556.88px" class="cls_002"><span class="cls_002">2. Губитак текуће године</span></div>
<div style="position:absolute;left:312.72px;top:557.84px" class="cls_002"><span class="cls_002">0423</span></div>
<div style="position:absolute;left:340px;top:557.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0423_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:557.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0423_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:557.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0423_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:557.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0423_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:90.00px;top:569.84px" class="cls_005"><span class="cls_005">Б. ДУГОРОЧНА РЕЗЕРВИСАЊА И ОБАВЕЗЕ</span></div>
<div style="position:absolute;left:312.72px;top:574.88px" class="cls_002"><span class="cls_002">0424</span></div>
<div style="position:absolute;left:99.12px;top:579.92px" class="cls_002"><span class="cls_002">(0425+0432)</span></div>
<div style="position:absolute;left:340px;top:574.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0424_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:574.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0424_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:574.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0424_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:574.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0424_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:90.00px;top:590.72px" class="cls_002"><span class="cls_002">I. ДУГОРОЧНА РЕЗЕРВИСАЊА</span></div>
<div style="position:absolute;left:52.32px;top:596.96px" class="cls_006"><span class="cls_006">40</span></div>
<div style="position:absolute;left:312.72px;top:595.76px" class="cls_002"><span class="cls_002">0425</span></div>
<div style="position:absolute;left:99.12px;top:600.80px" class="cls_002"><span class="cls_002">(0426+0427+0428+0429+0430+0431)</span></div>
<div style="position:absolute;left:340px;top:595.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0425_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:595.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0425_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:595.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0425_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:595.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0425_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:50.40px;top:614.00px" class="cls_006"><span class="cls_006">400</span></div>
<div style="position:absolute;left:90.00px;top:613.76px" class="cls_002"><span class="cls_002">1. Резервисања трошкова у гарантном року</span></div>
<div style="position:absolute;left:312.72px;top:613.76px" class="cls_002"><span class="cls_002">0426</span></div>
<div style="position:absolute;left:340px;top:613.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0426_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:613.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0426_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:613.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0426_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:613.76px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0426_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:90.00px;top:626.72px" class="cls_002"><span class="cls_002">2. Резервисања за трошкове обнављања</span></div>
<div style="position:absolute;left:50.40px;top:632.96px" class="cls_006"><span class="cls_006">401</span></div>
<div style="position:absolute;left:312.72px;top:632.72px" class="cls_002"><span class="cls_002">0427</span></div>
<div style="position:absolute;left:99.12px;top:636.80px" class="cls_002"><span class="cls_002">природних богатстава</span></div>
<div style="position:absolute;left:340px;top:632.72px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0427_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:632.72px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0427_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:632.72px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0427_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:632.72px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0427_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:50.40px;top:650.96px" class="cls_006"><span class="cls_006">403</span></div>
<div style="position:absolute;left:90.00px;top:650.72px" class="cls_002"><span class="cls_002">3. Резервисања за трошкове реструктуирања</span></div>
<div style="position:absolute;left:312.72px;top:650.72px" class="cls_002"><span class="cls_002">0428</span></div>
<div style="position:absolute;left:340px;top:650.72px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0428_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:650.72px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0428_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:650.72px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0428_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:650.72px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0428_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:90.00px;top:663.92px" class="cls_002"><span class="cls_002">4. Резервисања за накнаде и друге бенефиције</span></div>
<div style="position:absolute;left:50.40px;top:670.16px" class="cls_006"><span class="cls_006">404</span></div>
<div style="position:absolute;left:312.72px;top:669.92px" class="cls_002"><span class="cls_002">0429</span></div>
<div style="position:absolute;left:99.12px;top:672.80px" class="cls_002"><span class="cls_002">запослених</span></div>
<div style="position:absolute;left:340px;top:669.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0429_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:669.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0429_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:669.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0429_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:669.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0429_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:50.40px;top:688.16px" class="cls_006"><span class="cls_006">405</span></div>
<div style="position:absolute;left:90.00px;top:687.92px" class="cls_002"><span class="cls_002">5. Резервисања за трошкове судских спорова</span></div>
<div style="position:absolute;left:312.72px;top:687.92px" class="cls_002"><span class="cls_002">0430</span></div>
<div style="position:absolute;left:340px;top:687.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0430_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:687.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0430_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:687.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0430_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:687.92px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0430_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:40.56px;top:702.08px" class="cls_006"><span class="cls_006">402 и 409</span></div>
<div style="position:absolute;left:90.00px;top:701.84px" class="cls_002"><span class="cls_002">6. Остала дугорочна резервисања</span></div>
<div style="position:absolute;left:312.72px;top:701.84px" class="cls_002"><span class="cls_002">0431</span></div>
<div style="position:absolute;left:340px;top:701.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0431_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:701.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0431_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:701.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0431_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:701.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0431_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:90.00px;top:714.80px" class="cls_002"><span class="cls_002">I. ДУГОРОЧНЕ ОБАВЕЗЕ</span></div>
<div style="position:absolute;left:52.32px;top:720.08px" class="cls_006"><span class="cls_006">41</span></div>
<div style="position:absolute;left:312.72px;top:719.84px" class="cls_002"><span class="cls_002">0432</span></div>
<div style="position:absolute;left:99.12px;top:723.92px" class="cls_002"><span class="cls_002">(0433+0434+0435+0436+0437+0438+0439+0440)</span></div>
<div style="position:absolute;left:340px;top:719.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0432_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:719.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0432_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:719.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0432_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:719.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0432_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:50.40px;top:737.12px" class="cls_006"><span class="cls_006">410</span></div>
<div style="position:absolute;left:90.00px;top:736.88px" class="cls_002"><span class="cls_002">1. Обавезе које се могу конвертовати у капитал</span></div>
<div style="position:absolute;left:312.72px;top:736.88px" class="cls_002"><span class="cls_002">0433</span></div>
<div style="position:absolute;left:340px;top:736.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0433_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:736.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0433_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:736.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0433_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:736.88px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0433_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:90.00px;top:749.84px" class="cls_002"><span class="cls_002">2. Обаваезе према матичним и зависним правним</span></div>
<div style="position:absolute;left:50.40px;top:757.04px" class="cls_006"><span class="cls_006">411</span></div>
<div style="position:absolute;left:312.72px;top:755.84px" class="cls_002"><span class="cls_002">0434</span></div>
<div style="position:absolute;left:99.12px;top:759.92px" class="cls_002"><span class="cls_002">лицима</span></div>
<div style="position:absolute;left:340px;top:755.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0434_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:755.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0434_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:755.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0434_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:755.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0434_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

<div style="position:absolute;left:50.40px;top:774.08px" class="cls_006"><span class="cls_006">412</span></div>
<div style="position:absolute;left:90.00px;top:773.84px" class="cls_002"><span class="cls_002">3. Обавезе према осталим повезаним правним лицима</span></div>
<div style="position:absolute;left:312.72px;top:773.84px" class="cls_002"><span class="cls_002">0435</span></div>
<div style="position:absolute;left:340px;top:773.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0435_4" maxlength="4" size="4" class="napomena">
    </span>
</div>
<div style="position:absolute; left:368.8px; top:773.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0435_5" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:428.8px; top:773.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0435_6" maxlength="12" size="12" class="vals">            
    </span>
</div>
<div style="position:absolute; left:491.8px; top:773.84px" class="cls_002">
    <span class="cls_002">
        <input type="text" name="0435_7" maxlength="12" size="12" class="vals">            
    </span>
</div>

</div>

<script>
    (function (factory) {

        if (typeof define === 'function' && define.amd) {
            define(['jquery'], factory);
        } else if (typeof exports === 'object') {
            module.exports = factory(require('jquery'));
        } else {
            factory(jQuery || Zepto);
        }

        }(function($) {

        $.fn.maskNumber = function(options) {

            var settings = $.extend({}, $.fn.maskNumber.defaults, options);
            settings = $.extend(settings, options);
            settings = $.extend(settings, this.data());

            this.keyup(function() {
                format(this, settings);
            });
            
            return this;
        };

        $.fn.maskNumber.defaults = {
            thousands: ",",
            decimal: ".",
            integer: false,
            allowNegative: false
        };

        function format(input, settings) {
            var inputValue = input.value;
            inputValue = removeNonDigits(inputValue, settings.allowNegative);
            if (!settings.integer) {
                inputValue = addDecimalSeparator(inputValue);
            }
            inputValue = addThousandSeparator(inputValue, settings);
            inputValue = removeLeftZeros(inputValue);
            applyNewValue(input, inputValue);
        }

        function removeNonDigits(value, allowNegative) {
            return ((allowNegative && value[0] === "-") ? "-" : "") + value.replace(/\D/g, "");
        }

        function addDecimalSeparator(value, settings) {
            value = value.replace(/(\d{2})$/, settings.decimal.concat("$1"));
            value = value.replace(/(\d+)(\d{3}, \d{2})$/g, "$1".concat(settings.thousands).concat("$2"));
            return value;
        }

        function addThousandSeparator(value, settings) {
            var totalThousandsPoints = (value.length - 3) / 3;
            var thousandsPointsAdded = 0;
            while (totalThousandsPoints > thousandsPointsAdded) {
                thousandsPointsAdded++;
                value = value.replace(/(\d+)(\d{3}.*)/, "$1".concat(settings.thousands).concat("$2"));
            }
            
            return value;
        }

        function removeLeftZeros(value) {
            return value.replace(/^(0)(\d)/g,"$2");
        }

        function applyNewValue(input, newValue) {
            if (input.value != newValue) {
                input.value = newValue;
            }
            $(input).trigger('change', input.value);
        }

        }));

// za sve input elemente samo ne napomena input elemente:
        $("input:not('.napomena')").maskNumber({
            integer: true,
            thousands:'.'
        });
// company search:
        $('.livesearch').select2({
            placeholder: 'Изаберите фирму',
            ajax: {
                url: '/ajax-autocomplete-search-companies',
                dataType: 'json',
                delay: 250,
                processResults: function (data) {
                    return {
                        results: $.map(data, function (item) {
                            return {
                                text: item.name,
                                id: item.id
                            }
                        })
                    };
                },
                cache: true
            }
        });

</script>
</body>
</html>
