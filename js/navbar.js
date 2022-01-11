            var index=0;
            var down = document.getElementById("GFG_DOWN");
            function GFG_Fun() {
                index=index+1;
                var ID = document.createElement("input");
                ID.setAttribute("type", "text");
                ID.setAttribute("name", "name"+(index));
                ID.setAttribute("placeholder", "name");
                var PWD = document.createElement("input");
                PWD.setAttribute("type", "text");
                PWD.setAttribute("name", "valuelink"+(index));
                PWD.setAttribute("placeholder", "link");
                down.append(ID); 
                down.append(PWD); 
            }