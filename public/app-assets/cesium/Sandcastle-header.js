(function() {
    'use strict';

    var defaultAction;
    var bucket = window.location.href;
    var pos = bucket.lastIndexOf('/');
    if (pos > 0 && pos < (bucket.length - 1)) {
        bucket = bucket.substring(pos + 1);
    }

    window.Sandcastle = {
        bucket : bucket,
        declare : function() {
        },
        highlight : function() {
        },
        registered : [],
        finishedLoading : function() {
            window.Sandcastle.reset();

            if(defaultAction) {
                window.Sandcastle.highlight(defaultAction);
                defaultAction();
                defaultAction = undefined;
            }

            document.body.className = document.body.className.replace(/(?:\s|^)sandcastle-loading(?:\s|$)/, ' ');
        },
        addToggleButton : function(text, checked, onchange, toolbarID) {
            window.Sandcastle.declare(onchange);
            var input = document.createElement('input');
            input.checked = checked;
            input.type = 'checkbox';
            input.style.pointerEvents = 'none';
            var label = document.createElement('label');
            label.appendChild(input);
            label.appendChild(document.createTextNode(text));
            label.style.pointerEvents = 'none';
            var button = document.createElement('button');
            button.type = 'button';
            button.className = 'cesium-button';
            button.appendChild(label);

            button.onclick = function() {
                window.Sandcastle.reset();
                window.Sandcastle.highlight(onchange);
                input.checked = !input.checked;
                onchange(input.checked);
            };

            document.getElementById(toolbarID || 'toolbar').appendChild(button);
        },
        addToolbarButton : function(text, onclick, toolbarID) {
            window.Sandcastle.declare(onclick);
            var button = document.createElement('button');
            button.type = 'button';
            button.className = 'cesium-button';
            // button.className = 'cesium-button2';
            button.onclick = function() {
                if (text=='lluvia'){
                    $("#escala").attr('src','escala2.png');
                } else if (text=='temperatura') {
                    $("#escala").attr('src','escala.png');
                }
                // var src = ($("#escala").attr('src') === 'escala-temperatura.png')
                //     ? 'escala-temperatura.png'
                //     : 'escala-temperatura.png';
                // $("#escala").attr('src', src);

                window.Sandcastle.reset();
                window.Sandcastle.highlight(onclick);
                onclick();
            };
            // button.textContent = text;
            // button.innerHTML = '<svg class="cesium-svgPath-svg" width="28" height="28" viewBox="0 0 28 28" style="width: 80px; height: 80px;"><path d="M14,4l-10,8.75h20l-4.25-3.7188v-4.6562h-2.812v2.1875l-2.938-2.5625zm-7.0938,9.906v10.094h14.094v-10.094h-14.094zm2.1876,2.313h3.3122v4.25h-3.3122v-4.25zm5.8442,1.281h3.406v6.438h-3.406v-6.438z"></path></svg>';

            // button.innerHTML = '<svg class="cesium-svgPath-svg" height="512" viewBox="0 0 550 550" width="512" style="width: 80px; height: 80px;"><path d="m257.689 277.337c0 59.058 48.047 107.104 107.104 107.104s107.104-48.047 107.104-107.104c0-25.137-8.889-49.572-25.028-68.802l-.256-.313-81.82-103.006-82.077 103.32c-16.139 19.229-25.027 43.664-25.027 68.801z"/><path d="m364.793 414.442c-75.6 0-137.104-61.505-137.104-137.104 0-32.111 11.333-63.33 31.916-87.93l63.63-80.106-86.821-109.302-150.596 189.589c-29.516 35.243-45.766 79.979-45.766 126 0 108.274 88.087 196.361 196.361 196.361 75.428 0 141.05-42.753 173.927-105.296-14.258 5.037-29.586 7.788-45.547 7.788z"/></svg>';
            if (text=='lluvia'){
                // button.innerHTML = '<svg class="cesium-svgPath-svg" height="512" viewBox="0 0 600 600" width="512" style="width: 80px; height: 80px;"><path d="m257.689 277.337c0 59.058 48.047 107.104 107.104 107.104s107.104-48.047 107.104-107.104c0-25.137-8.889-49.572-25.028-68.802l-.256-.313-81.82-103.006-82.077 103.32c-16.139 19.229-25.027 43.664-25.027 68.801z"/><path d="m364.793 414.442c-75.6 0-137.104-61.505-137.104-137.104 0-32.111 11.333-63.33 31.916-87.93l63.63-80.106-86.821-109.302-150.596 189.589c-29.516 35.243-45.766 79.979-45.766 126 0 108.274 88.087 196.361 196.361 196.361 75.428 0 141.05-42.753 173.927-105.296-14.258 5.037-29.586 7.788-45.547 7.788z"/></svg>';
                button.innerHTML = '<svg class="cesium-svgPath-svg" id="buttonlluvia" viewBox="0 0 1024 1024"><path d="M682.666667 320V149.333333H341.333333v170.666667L132.266667 853.333333c-12.8 32 10.666667 64 44.8 64h672c34.133333 0 55.466667-34.133333 44.8-64L682.666667 320z" fill="#eeba30" /><path d="M682.666667 192H341.333333c-23.466667 0-42.666667-19.2-42.666666-42.666667s19.2-42.666667 42.666666-42.666666h341.333334c23.466667 0 42.666667 19.2 42.666666 42.666666s-19.2 42.666667-42.666666 42.666667z" fill="#8BC34A" /><path d="M597.333333 640c0 93.866667-85.333333 170.666667-85.333333 170.666667s-85.333333-76.8-85.333333-170.666667 85.333333-170.666667 85.333333-170.666667 85.333333 76.8 85.333333 170.666667z" fill="#2E7D32" /><path d="M663.466667 695.466667c-42.666667 85.333333-151.466667 115.2-151.466667 115.2s-42.666667-106.666667 0-189.866667 151.466667-115.2 151.466667-115.2 42.666667 104.533333 0 189.866667z" fill="#388E3C" /><path d="M360.533333 695.466667c42.666667 85.333333 151.466667 115.2 151.466667 115.2s42.666667-106.666667 0-189.866667-151.466667-115.2-151.466667-115.2-42.666667 104.533333 0 189.866667z" fill="#43A047" /></svg>';

            } else if (text=='temperatura'){
                // button.innerHTML = '<svg class="cesium-svgPath-svg" height="512" viewBox="0 0 600 600" width="512" style="width: 80px; height: 80px;"><g><path d="M341.333,288.593V85.333C341.333,38.205,303.128,0,256,0s-85.333,38.205-85.333,85.333v203.259 C144.48,312.03,128,346.091,128,384c0,70.693,57.308,128,128,128s128-57.307,128-128C384,346.091,367.52,312.03,341.333,288.593z M256,469.333c-47.128,0-85.333-38.205-85.333-85.333c0-24.637,10.441-47.492,28.455-63.615l14.212-12.72V85.333 c0-23.564,19.103-42.667,42.667-42.667s42.667,19.102,42.667,42.667v222.332l14.212,12.72 c18.014,16.123,28.455,38.977,28.455,63.615C341.333,431.128,303.128,469.333,256,469.333z"/></g><g><rect x="234.667" y="170.667" width="42.667" height="256"/></g><g><circle cx="256" cy="384" r="64"/></g></svg>';
                button.innerHTML = '<svg class="cesium-svgPath-svg" id="buttontemp" viewBox="0 0 1024 1024"><path d="M682.666667 320V149.333333H341.333333v170.666667L132.266667 853.333333c-12.8 32 10.666667 64 44.8 64h672c34.133333 0 55.466667-34.133333 44.8-64L682.666667 320z" fill="#9CCC65" /><path d="M682.666667 192H341.333333c-23.466667 0-42.666667-19.2-42.666666-42.666667s19.2-42.666667 42.666666-42.666666h341.333334c23.466667 0 42.666667 19.2 42.666666 42.666666s-19.2 42.666667-42.666666 42.666667z" fill="#8BC34A" /><path d="M597.333333 640c0 93.866667-85.333333 170.666667-85.333333 170.666667s-85.333333-76.8-85.333333-170.666667 85.333333-170.666667 85.333333-170.666667 85.333333 76.8 85.333333 170.666667z" fill="#2E7D32" /><path d="M663.466667 695.466667c-42.666667 85.333333-151.466667 115.2-151.466667 115.2s-42.666667-106.666667 0-189.866667 151.466667-115.2 151.466667-115.2 42.666667 104.533333 0 189.866667z" fill="#388E3C" /><path d="M360.533333 695.466667c42.666667 85.333333 151.466667 115.2 151.466667 115.2s42.666667-106.666667 0-189.866667-151.466667-115.2-151.466667-115.2-42.666667 104.533333 0 189.866667z" fill="#43A047" /></svg>';
                // $("#escala").attr("src","escala-temperatura.png");
            } else{
                button.textContent = text;
            }


            document.getElementById(toolbarID || 'toolbar').appendChild(button);
        },
        addDefaultToolbarButton : function(text, onclick, toolbarID) {
            window.Sandcastle.addToolbarButton(text, onclick, toolbarID);
            defaultAction = onclick;
        },
        addDefaultToolbarMenu : function(options, toolbarID) {
            window.Sandcastle.addToolbarMenu(options, toolbarID);
            defaultAction = options[0].onselect;
        },
        addToolbarMenu : function(options, toolbarID) {
            var menu = document.createElement('select');
            menu.className = 'cesium-button';
            menu.onchange = function() {
                window.Sandcastle.reset();
                var item = options[menu.selectedIndex];
                if (item && typeof item.onselect === 'function') {
                    item.onselect();
                }
            };
            document.getElementById(toolbarID || 'toolbar').appendChild(menu);

            if (!defaultAction && typeof options[0].onselect === 'function') {
                defaultAction = options[0].onselect;
            }

            for (var i = 0, len = options.length; i < len; ++i) {
                var option = document.createElement('option');
                option.textContent = options[i].text;
                option.value = options[i].value;
                menu.appendChild(option);
            }
        },
        reset : function() {
        },



    };

    if (window.location.protocol === 'file:') {
        if (window.confirm("You must host this app on a web server.\nSee contributor's guide for more info?")) {
            window.location = 'https://github.com/AnalyticalGraphicsInc/cesium/wiki/Contributor%27s-Guide';
        }
    }



}());

