//CompactDOM demo script

start=function()
{	
    test = [];
	test[1] = function(){
		__.send("?la=en"); //redirect
	}
	
	test[2] = function(){
		__.send(); //submit default form
	}

	test[3] = function(){
		_("#a").attribute("action","?t=3");//set action 
		_("#a").send(); //submit form id = "a"
	}	

	test[4] = function(){
		attr={url:"?t=4",to:"#b"};
		__.send(attr)
		_(attr.to).display(__.dtc);
	}

	test[5] = function(){
		attr={url:"?t=5",to:"#modal",func:viewModal};
		__.send(attr);
	}

	test[6] = function(){		
		attr={url:"?sel=1",to:"#continents",func:createSelect};
		__.send(attr);
	}

	for(i in test) _("#test"+i).click(test[i]);
	
	__.modal();					
}
__.load(start);

testF = function (rsp,to,url){
	alert(rsp+"\n"+to+"\n"+url);
}

createSelect = function (rsp,to){
	b=_("#b");				
	b.content("");	
	json=JSON.parse(rsp);
	continents = Object.values(json);
	b.create(1,{tag:"select",id:"continents"});	
	sel=_(to);
	sel.create(continents);
	b.display(__.dtc);	
}
viewModal = function(rsp, to){_(to).modal(rsp);};