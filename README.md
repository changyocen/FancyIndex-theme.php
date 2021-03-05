# FancyIndex-theme.php

## 效果展示

[ipv4](https://ipv4.yocen.top:21443)
[ipv6](https://ipv6.yocen.top)

## 需要提前nginx编译fancyindex模块

建议在nginx定义的根目录下新建module文件夹，然后git clone此项目

## 安装
在nginx配置文件的location/{ }中增加以下

```
fancy_index_header = /module/fancyindex/header.php;
fancy_index_footer = /module/fancyindex/footer.php;
```

## 代码实现

#### 给每行的文件增加序号和图标，这里的图标用的是[FontAwesome](https://fa5.dashgame.com/#/)

```
function tr_counter() {
    var trs=document.getElementsByClassName("link");
    var tds=document.getElementsByClassName("size");
    var zeros=["","0","00","000","0000"];
    if(trs.length<=9){
        document.getElementById("dbody").style.height="500px";
    }
    cont=1;
    if(cont+1<=trs.length ){
        for(var i=1;i<trs.length;i++){
            var text = trs[i].innerHTML.split('\">');
            var scont=cont.toString();
            scont=zeros[trs.length.toString().length-scont.length]+scont;
            var str_calss_name='<i class="fas fa-file" style="color: #0b2e13"></i>&nbsp;';
            if(tds[i].innerText=='-'){
                str_calss_name='<i class="fas fa-folder" style="color: #000000"></i>&nbsp;';
            }
            else {
                var filename=trs[i].innerText;
                var suffixs = filename.split('.');
                var suffix = suffixs[suffixs.length-1].toLocaleLowerCase();
                if(suffix=="exe"||suffix=="msi"){
                    str_calss_name='<i class="fas fa-dice-d6" style="color: #686868"></i>&nbsp;';
                }else if(suffix=='cpp'||suffix=='py'||suffix=='html'||suffix=='c'||suffix=='java'||suffix=='php'){//代码
                    str_calss_name='<i class="fas fa-file-code" style="color: #0b2e13"></i>&nbsp;';
                }else if (suffix=='pdf'){//pdf
                    str_calss_name='<i class="fas fa-file-pdf" style="color: #e34850"></i>&nbsp;';
                }else if(suffix=="ppt" || suffix=="pptx"){//ppt
                    str_calss_name='<i class="fas fa-file-powerpoint" style="color: #b7472a"></i>&nbsp;';
                }else if(suffix == "doc" || suffix=="docx"){//word
                    str_calss_name='<i class="fas fa-file-word" style="color: #2b579a"></i>&nbsp;';
                }else if(suffix == "xls" || suffix=="xlsx"|| suffix=="csv"){//excel
                    str_calss_name='<i class="fas fa-file-excel" style="color: #217346"></i>&nbsp;';
                }else if(suffix=="dmg"||suffix=="iso"){
                    str_calss_name='<i class="fas fa-dot-circle" style="color: #aeb9c0"></i>&nbsp;';
                }else if(suffix=="zip"||suffix=="rar"||suffix=="7z"||suffix=="tar"||suffix=="gz"){//压缩包
                    str_calss_name='<i class="fas fa-file-archive" style="color: #aeb9c0"></i>&nbsp;';
                }else if(suffix=="mp4"||suffix=="mov"||suffix=="mkv"||suffix=="aiff"){//视频
                    str_calss_name='<i class="fas fa-file-video" style="color: #aeb9c0"></i>&nbsp;';
                }else if(suffix=="mp3"||suffix=="wav"||suffix=="mpeg"){//音频
                    str_calss_name='<i class="fas fa-file-audio" style="color: #aeb9c0"></i>&nbsp;';
                }else if(suffix=="jpg"||suffix=="jpeg"||suffix=="png"||suffix=="bmp"||suffix=="jpg"||suffix=="svg"||suffix=="ico"||suffix=="psd"){//图片
                    str_calss_name='<i class="fas fa-file-image" style="color: #aeb9c0"></i>&nbsp;';
                }else if(suffix=="txt" || suffix=="sh"){//文本
                    str_calss_name='<i class="fas fa-file-alt" style="color: #ffeaa4"></i>&nbsp;';
                }else if(suffix=="apk"){//apk
                    str_calss_name='<i class="fab fa-android" style="color: #30d780"></i>&nbsp;';
                }else if(suffix=="ppt" || suffix=="pptx"){//ppt
                    str_calss_name='<i class="fas fa-file-powerpoint" style="color: #b7472a"></i>&nbsp;';
                }
            }
            var str=text[0]+'">&nbsp;['+scont+"] | "+str_calss_name+text[1];
            trs[i].innerHTML=str;
            // alert("Text:"+trs[i].innerText+"<br>Html:"+trs[i].innerHTML);

            cont++;
        }
    }
    var TRS=document.getElementsByTagName("tr");
    TRS[1].innerHTML='<td class="link" colspan="3"><a href="../">&nbsp;&nbsp;<i class="fas fa-folder-open" >&nbsp;返回上级目录</a></td>';
}
```

#### 改变文件大小的显示单位，原来是iB现在统一用B,KB,GB,....显示

```
function change_size() {
    var tds=document.getElementsByClassName("size");
    for(var i=0;i<tds.length;i++){
        var text = tds[i].innerHTML;
        if(text.length>1){
            text=text.split("iB")[0];
            if(text[text.length-1]!='B'){
                text=text+'B';
            }
            else{
                text = text+" ";
            }
        }
        tds[i].innerHTML=text;
        //tds[i].style.textAlign="right";
    }
}
```

#### 改变文件修改时间的显示

修改前的时间格式月份为英文缩写，如2020年1月1号就显示为:2020-Feb-1

```
function change_date(){
    var tds = document.getElementsByClassName("date");
    for(var i=1;i<tds.length;i++){
        var text = tds[i].innerHTML;
        var dates=text.split("-");
        var year = dates[0];
        var month=dates[1];
        var day =dates[2] ;
        var months = new Object();
        months["Jan"]="01";
        months["Feb"]="02";
        months["Mar"]="03";
        months["Apr"]="04";
        months["May"]="05";
        months["Jun"]="06";
        months["Jul"]="07";
        months["Aug"]="08";
        months["Sept"]="09";
        months["Otc"]="10";
        months["Nov"]="11";
        months["Dec"]="12";
        var date=year+"-"+months[month]+"-"+day;
        tds[i].innerHTML=date;
        //alert(day);
    }
}

```



## License - 开源协议

[GPL](https://github.com/zhangyucheng1021/FancyIndex-theme.php/blob/main/LICENSE)
