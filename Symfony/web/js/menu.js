sfHover = function()
{
	var sfEls = document.getElementById("menuAccueil").getElementsByTagName("li");
	for (var i=0; i<sfEls.length; i++)
	{
		sfEls[i].onmouseover = function()
		{
			this.classname+=" sfhover";
		}
		sfEls[i].onmouseout = function()
		{
			this.classname = this.classname.replace(new RegExp(" sfhover\\b"), "");
		}
	}
}
if (window.attachEvent) window.attachEvent("onload", sfHover);