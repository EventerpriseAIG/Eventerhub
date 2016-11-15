
<script>
	(function (lib, img, cjs, ss, an) {

var p; // shortcut to reference prototypes
lib.webFontTxtInst = {}; 
var loadedTypekitCount = 0;
var loadedGoogleCount = 0;
var gFontsUpdateCacheList = [];
var tFontsUpdateCacheList = [];
lib.ssMetadata = [];



lib.updateListCache = function (cacheList) {		
	for(var i = 0; i < cacheList.length; i++) {		
		if(cacheList[i].cacheCanvas)		
			cacheList[i].updateCache();		
	}		
};		

lib.addElementsToCache = function (textInst, cacheList) {		
	var cur = textInst;		
	while(cur != exportRoot) {		
		if(cacheList.indexOf(cur) != -1)		
			break;		
		cur = cur.parent;		
	}		
	if(cur != exportRoot) {		
		var cur2 = textInst;		
		var index = cacheList.indexOf(cur);		
		while(cur2 != cur) {		
			cacheList.splice(index, 0, cur2);		
			cur2 = cur2.parent;		
			index++;		
		}		
	}		
	else {		
		cur = textInst;		
		while(cur != exportRoot) {		
			cacheList.push(cur);		
			cur = cur.parent;		
		}		
	}		
};		

lib.gfontAvailable = function(family, totalGoogleCount) {		
	lib.properties.webfonts[family] = true;		
	var txtInst = lib.webFontTxtInst && lib.webFontTxtInst[family] || [];		
	for(var f = 0; f < txtInst.length; ++f)		
		lib.addElementsToCache(txtInst[f], gFontsUpdateCacheList);		

	loadedGoogleCount++;		
	if(loadedGoogleCount == totalGoogleCount) {		
		lib.updateListCache(gFontsUpdateCacheList);		
	}		
};		

lib.tfontAvailable = function(family, totalTypekitCount) {		
	lib.properties.webfonts[family] = true;		
	var txtInst = lib.webFontTxtInst && lib.webFontTxtInst[family] || [];		
	for(var f = 0; f < txtInst.length; ++f)		
		lib.addElementsToCache(txtInst[f], tFontsUpdateCacheList);		

	loadedTypekitCount++;		
	if(loadedTypekitCount == totalTypekitCount) {		
		lib.updateListCache(tFontsUpdateCacheList);		
	}		
};
// symbols:
// helper functions:

function mc_symbol_clone() {
	var clone = this._cloneProps(new this.constructor(this.mode, this.startPosition, this.loop));
	clone.gotoAndStop(this.currentFrame);
	clone.paused = this.paused;
	clone.framerate = this.framerate;
	return clone;
}

function getMCSymbolPrototype(symbol, nominalBounds, frameBounds) {
	var prototype = cjs.extend(symbol, cjs.MovieClip);
	prototype.clone = mc_symbol_clone;
	prototype.nominalBounds = nominalBounds;
	prototype.frameBounds = frameBounds;
	return prototype;
	}


(lib.ClipGroup_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AmpDIIAAmPINTAAIAAGPg");
	mask.setTransform(42.6,20);

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FCFDFB").s().p("AmXBBQgZgcAKguIAPgoIM0grIALBFQAHBHgSARQgYAXl+AFIhZAAQktAAgYgcg");
	this.shape.setTransform(42.6,30.7);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FCFDFB").s().p("AhVBKQgQgTANgjQAOgjAjgeQAkgfAjgIQAlgIARATQAQATgNAjQgNAigkAfQgjAfgkAIQgLADgJAAQgWAAgMgOg");
	this.shape_1.setTransform(23,23);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#FCFDFB").s().p("AihBzQhDgvAAhEQAAhCBDgwQBDgwBeAAQBfAABDAwQBDAwAABCQAABEhDAvQhDAwhfAAQheAAhDgwg");
	this.shape_2.setTransform(47.1,16.3);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#FCFDFB").s().p("AhJBKQgfgfAAgrQAAgqAfgfQAfgfAqAAQArAAAfAfQAfAfAAAqQAAArgfAfQgfAfgrAAQgqAAgfgfg");
	this.shape_3.setTransform(73.5,23);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#FCFDFB").s().p("Ag7A8QgZgYAAgkQAAgiAZgZQAZgZAiAAQAjAAAZAZQAZAZAAAiQAAAjgZAZQgZAZgjAAQgiAAgZgZg");
	this.shape_4.setTransform(9.7,28.2);

	var maskedShapeInstanceList = [this.shape,this.shape_1,this.shape_2,this.shape_3,this.shape_4];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.ClipGroup_1, new cjs.Rectangle(0,0,85.2,40), null);


(lib.ClipGroup = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("ApAEPIAAodISBAAIAAIdg");
	mask.setTransform(57.7,27.1);

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FCFDFB").s().p("AooBYQgigmAOg+IAUg3IRYg6IAPBdQAJBhgYAXQgOAOioALQihALjQACIh3AAQmZAAghgmg");
	this.shape.setTransform(57.7,41.5);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FCFDFB").s().p("AhzBkQgXgaATgwQARgvAxgpQAwgpAxgLQAygMAWAaQAXAagTAwQgRAvgxApQgwAqgxALQgOAEgNAAQgdAAgQgTg");
	this.shape_1.setTransform(31.1,31.2);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#FCFDFB").s().p("AjaCcQhbhBAAhbQAAhaBbhBQBbhBB/AAQCAAABbBBQBbBBAABaQAABbhbBBQhbBBiAAAQh/AAhbhBg");
	this.shape_2.setTransform(63.8,22.1);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#FCFDFB").s().p("AhjBkQgqgpAAg7QAAg6AqgqQApgpA6AAQA6AAAqApQAqAqAAA6QAAA7gqApQgqAqg6AAQg6AAgpgqg");
	this.shape_3.setTransform(99.5,31.2);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#FCFDFB").s().p("AhRBSQghgjAAgvQAAgvAhghQAigiAvAAQAwAAAiAiQAhAhAAAvQAAAvghAjQgiAhgwAAQgvAAgighg");
	this.shape_4.setTransform(13.1,38.1);

	var maskedShapeInstanceList = [this.shape,this.shape_1,this.shape_2,this.shape_3,this.shape_4];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.ClipGroup, new cjs.Rectangle(0,0,115.4,54.2), null);


(lib.Symbol1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FCFDFB").s().p("Ag/ACQBPhhBCgDQAQgBAQACQAWADgGAGQgKAJgPAbQgQAfAAASQACAFgFAFQgFAGgMgBQgOAAgYAKQgaALgaASQgeAZgOAJQgZAOgoAAg");
	this.shape.setTransform(267.5,165.6,0.998,0.998);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FCFDFB").s().p("AAgEEQgjgTgfgjQgug0AHg1QgCgRAEgfQAEgbAAgXQAAgXgGAUIgKAXQgFAMgEAfQgOABg3gXQhCgbgbgcQg2g5gQgOQgsgmgtgQIBAAVQBOAVAngFQBAgIArgLQBCgQA9ggQAvgXBKgrQA5gfAZgDQBmgJAkAwQATAZATArQAUAvADAEQALAQgBAEQgBAFgRgDQhRgQgUAWIg8BCQgwAzgMAEQgRAHgNgDQgNgCAMgLQAOgMAUgUQAUgTAKgNQAKgNAAgKQAAgLgOALQgtAmgUAYQg2BAgPBOQgQBCAHAsQAAAIgFABIgCAAQgHAAgPgIg");
	this.shape_1.setTransform(255,195.8,0.998,0.998);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#FCFDFB").s().p("AiZBeQgBgIAFgIIAag0QAKgVgCgvIgEgsQgCgTAPAFQAIACAQALQAmAPBPAJQBKAHAcgEQAUgEgDAOQgCAHgGAIQgSASgaAVQgzAsgkARQgjASgzAKQgWAEgqAFIgEAAQgMAAgCgIg");
	this.shape_2.setTransform(526.4,308.7,0.998,0.998);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#FCFDFB").s().p("AiHECQhugHgSAAQgXABAMgLQAJgIAPgGQAEgBAlgGQAmgHAcgJQAegKAagpQAUgfADgSQACgJgFgBIgKAAQgGgEhBg4QiFhsAAipQAAgSAJAFQAFACAFAGIATAQIBCAxQAnAbBlAmQAyASArANQgdgKAAgSQABgFAJgTQANgWAagOQAPgJAfgKQATgGAnANQAaAKAWAMQAQAKAmAaIgvAFQgLABgJAQQgQAdgGAGQgOARgBAjQAAAUADA0QABBAg3A2QgpAnhEAgQgmARhbAAIgYAAg");
	this.shape_3.setTransform(493.7,303.2,0.998,0.998);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#FCFDFB").s().p("AiZBeQgBgIAFgHIAag1QAKgVgCgvIgEgsQgCgTAPAFQAIACAQALQAmAPBQAJQBKAHAbgEQAUgEgDAOQgCAHgGAIIgsAnQgzAsgkARQg4AcheAJIgEAAQgMAAgCgIg");
	this.shape_4.setTransform(208.1,320.6,0.998,0.998);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#FCFDFB").s().p("AiHECQhugHgSAAQgXABAMgLQAJgIAQgGIAogHQAmgHAcgJQAegKAagpQAVgfACgSQACgJgFgBIgKAAIhHg8QiFhsAAipQAAgSAJAFQAFACAFAGIATAQIBCAxQAnAcBlAlQAyASArANQgdgKAAgSQABgGAKgSQANgWAZgOQAOgIAggLQATgGAnANQAbAKAVAMQAQAKAmAaIgvAFQgLABgJAQQgQAdgGAGQgOARgBAjQAAAUADA0QABBwikBNQglARhZAAIgbAAg");
	this.shape_5.setTransform(175.3,315.1,0.998,0.998);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#FCFDFB").s().p("AiZBdQgBgHAFgIIAJgQIASglQAKgUgCgvIgFgsQgCgTAPAFQAIACAQAKQAmAQBQAJQBKAHAbgEQAUgEgDAOQgCAHgFAHQgTATgaAVQgzAsgkARQg3AbhfAKIgFAAQgLAAgCgJg");
	this.shape_6.setTransform(367.8,120.9,0.998,0.998);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#FCFDFB").s().p("AiHECQhugHgSAAQgXAAAMgKQAJgJAQgFQADgBAlgGQAngHAbgJQAegKAagpQAVggACgSQACgIgEgBIgLAAIhHg8QiFhsAAipQAAgSAKAFQAEACAFAGIAUAQQAbAVAmAbQAnAcBmAlQAxATArANQgdgKABgSQAAgFAKgTQANgWAZgOQAQgJAegKQATgGAnANQAZAJAXANQARAKAlAaIgvAFQgLABgJAQQgQAcgGAHQgOARgBAjQAAAUADA0QABBAg3A1QgpAohEAfQglAShZAAIgbAAg");
	this.shape_7.setTransform(335.1,115.4,0.998,0.998);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#FCFDFB").s().p("Ag4BdQgehHAMgmIAahRQAPgoAXgeQAGgGABABQADAAABARQACAaAXAzQAbA7AZAJIgIAOQgLATgIAXIgcBKQgUAwgOAFQgWgcgXg0g");
	this.shape_8.setTransform(29,250.9,0.998,0.998);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#FCFDFB").s().p("AkZDJQB4hDBNheQAOgUAUgnQATgnANghQAVg+AVgjQAog/AsADQBIAGATAFQAvAOA1AwQgOAAgRADQgiAGgJARIgUAWQgQAZAEAjIgkgFQgcgFgPgKIgZgPIAUAZQAaAaAjAKQB5AiBFguQAMgJAIgBQAMgCgJAUIgYAzQgXAugfAhQhdBmiPghIgOANQgOAJgbAJQhQAYjcASQgrANg5AJQAtgPA8ghg");
	this.shape_9.setTransform(38.6,264.8,0.998,0.998);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#FCFDFB").s().p("Ag3BdQgfhHAMgmIAbhQQAPgoAXgfQAFgGACABQACABACAQQABAaAYAzQAbA7AZAJIgJAOQgKATgJAXIgbBKQgVAwgNAFQgXgcgWg0g");
	this.shape_10.setTransform(453.3,207.5,0.998,0.998);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#FCFDFB").s().p("AkZDJQB5hDBMheQAOgUAUgnQAUgnAMghQAWhAAVghQAng/AsADQBIAGATAFQAvAOA1AwQgOAAgRADQghAGgKARQgLAKgIAMQgQAZAEAjQgWgCgPgDQgbgFgQgKIgZgPIAUAZQAbAaAiAKQB7AiBDguQAMgJAIgBQAMgCgJAUQgqBcgjAnQheBliOghQgIAIgHAFQgNAJgbAJQhRAYjbASQgcAIgnAIIgiAGg");
	this.shape_11.setTransform(462.9,221.4,0.998,0.998);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#FCFDFB").s().p("AjRECQg8gJg5gSQBygIA+gqQAUgNAegmQAHgJAFgBIAKAAQAIgBgIgGQjhiPglifQgHgiAPAAQAOgBAKARQAGALBiAjQBGAZBVAbQAwAQAkgFQATgCAJgFQgmACgPgKQgQgLAPgzQAVgtAogWQAXgNAsgIQAvgHA2AZQA1AZAoAuQAPARgEADQgCABgIgCQgxgRgUANQgEACgNAXQgFAJgNAOQgNAPgDAAQgEgBgDAEQgDAEABAFQARCfhCBQQgvA4h1AmQgxARg+AAQgpAAgvgIg");
	this.shape_12.setTransform(512.1,148.2,0.998,0.998);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#FCFDFB").s().p("AjRECQg8gJg4gSQBxgIA/gqQAUgNAdgmQAHgJAFgBIAKAAQAJgBgIgGQjkiQgiieQgIgiAPAAQAOAAAKAQQAMATD3BPQAxAQAkgFQASgCAJgFQgmACgOgKQgRgLAPgzQAVgtAogWQAXgMAsgJQAvgHA3AZQA1AZAoAuQAOARgEADQgCABgIgCQgxgRgUANQgEACgMAXQgGAJgNAOQgNAPgDAAQgDgBgDAEQgDAEABAFQARCfhDBQQguA4h2AmQgxARg+AAQgpAAgvgIg");
	this.shape_13.setTransform(409.3,296.5,0.998,0.998);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#FCFDFB").s().p("Ag/AAIArgqQAsgtAKgHQAPgKACABQAFABgEAYQgNBSAQAiQAKAXgBASQgCARgLAIQg7gkg3hEg");
	this.shape_14.setTransform(71.4,344,0.998,0.998);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#FCFDFB").s().p("AAtEJQhbgDhigmQhUgngIgDQgKgDhWgJIhUgKIBegEQBigGAbgIQAVgGAlgSQAegLAMARQAUAcAgAfQgBgIgHgPQgOgcgegeQgjgjgIhNQgMh3BUiFQAGgLAGAoQAHAzAXAkQApBDBkAyQAKgYAjggQAvgpAuAEQAtAEAoAfQAZAUAQAZQAIAMAMANIAOANQAJAKgQABQgnAEgWAHQg0ARgJAlQgQBAg1A4QhFBJhcAAIgJAAg");
	this.shape_15.setTransform(65.6,361,0.998,0.998);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#FCFDFB").s().p("AhCgVIAygiQAzgjALgFQARgHACABQAFACgIAXQgdBNAIAmQAGAYgFARQgFAQgMAGQgzgtgohOg");
	this.shape_16.setTransform(486.6,44.4,0.998,0.998);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#FCFDFB").s().p("AAJEMQhZgVhZg5QhKg2gIgEQgOgIiegxIBdAOQBiANAbgCQAWgCAogKQAfgFAJATQAOAfAZAlQABgJgEgPQgIgfgYgiQgbgqAHhNQALh3BshyQAHgKgCAoQgCA0APAnQAdBLBYBEQANgWAqgYQA2gfAsAMQAsANAgAmQAVAXAMAcQAIAVARAXQAHAMgQgCQgqgDgUADQg2AGgQAiQgcA8g/AtQg/AthDAAQgZAAgagGg");
	this.shape_17.setTransform(475.6,59,0.998,0.998);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#FCFDFB").s().p("AhDAMIAmguQAngxAKgIQAOgMACABQAGAAgCAYQgGBRAVAjQAMAWABASQAAAQgLAKQg9gcg/hAg");
	this.shape_18.setTransform(568,63.1,0.998,0.998);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#FCFDFB").s().p("AiBDsQhXgfgIgBQgQgDilgBIBcgOQBhgQAagKQAUgIAkgWQAcgOAOAQQAXAaAjAbQgCgIgJgNQgQgbghgbQgmgggQhMQgZh0BGiNQADgFACADQAEAFAGAYQANAzAbAhQAwA/BoAnQAGgZAggjQArguAugBQAtgBArAbQAbASATAXQAPASAWAQQAEAEAAADQgBAEgIACQgoAJgUAIQgyAVgFAmQgJBBgvA+QhBBThhAHIghABQhMAAhUgXg");
	this.shape_19.setTransform(564.5,81.1,0.998,0.998);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#FCFDFB").s().p("AhCALIAmgtQAngxAJgIQAOgMACAAQAFABgBAYQgFBTAUAhQAMAVAAASQAAARgKAJQg8gbg/hBg");
	this.shape_20.setTransform(287.4,261.6,0.998,0.998);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#FCFDFB").s().p("AiBDsQhWgfgIgBQgLgChWgBIhVgBQCugXApgRQAVgIAjgVQAcgOAOAPQAYAaAiAbQgBgIgJgNQgRgbghgbQgmgggQhMQgYh0BFiNQAFgMALAnQAMAyAaAiQAxA/BoAnQAGgZAhgjQAqguAugBQAtgBArAbQAbASATAXQAPASAWAQQAEAEAAADQAAAEgJACQhrATgIA5QgIBBgwA+QhABThhAHIghABQhNAAhUgXg");
	this.shape_21.setTransform(283.8,279.7,0.998,0.998);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#FCFDFB").s().p("AhBgTIAxgjQAzgkALgFQARgHACABQAEABgHAXQgcBNAKAnQAGAYgEARQgFARgMAGQg0gugqhMg");
	this.shape_22.setTransform(429.4,114.6,0.998,0.998);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#FCFDFB").s().p("AANENQhZgThag3QhMg1gHgDQgPgHifguIBdAMQBiALAcgDQAWgDAngLQAfgFAKASQAPAfAZAkQABgIgEgQQgJgegYgiQgdgqAGhMQAIh4Bph0QAIgKgBAoQgBA0APAnQAeBKBaBCQANgWApgZQA2ghAsAMQAsALAhAmQAWAYALAaQAKAVARAWQAHAMgQgBQgngDgXAEQg2AHgPAjQgaA8g/AvQhAAvhGAAQgXAAgXgEg");
	this.shape_23.setTransform(419.1,129.4,0.998,0.998);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("#FCFDFB").s().p("AhCALIAmguQAngxAJgHQAOgMACAAQAFABgBAYQgFBTAUAhQAMAVAAASQAAARgKAKQg7gbhAhCg");
	this.shape_24.setTransform(376.4,188.7);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("#FCFDFB").s().p("AiADsQhXgfgJgBQgQgDilgBIBdgOQBhgQAagKQAUgIAjgWQAdgOAOAQQAXAaAiAbQgCgIgIgOQgRgbgggaQgngggQhMQgYh0BGiNQAFgMAJAnQANAyAbAiQAwA+BoAnQAHgYAggjQArguAtgBQAugBAqAbQAcASASAXQAJALAOALIAOAMQAKAJgPAEQgnAIgUAJQgyAVgGAmQgJBAgvA+QhABUhhAGIgjACQhMAAhSgXg");
	this.shape_25.setTransform(372.8,206.8,0.998,0.998);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f("#FCFDFB").s().p("AhDALIAnguQAngxAJgHQAOgMACAAQAGABgCAYQgGBRAVAjQAMAVAAASQAAARgKAKQg9gcg/hBg");
	this.shape_26.setTransform(602.9,153.1,0.998,0.998);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f("#FCFDFB").s().p("AiBDsQhXgegIgCQgQgDilAAIBcgOQBigQAZgLQAVgIAjgVQAcgOAOAPQAXAaAjAcQgCgJgIgNQgRgbghgaQgmghgQhLQgZh1BGiNQADgEACACQAEAFAGAYQANAzAbAhQAwA/BoAnQAGgZAhgjQArgtAtgBQAugBAqAbQAcARASAXQAJALAOAMIAOALQAKAKgPADQgoAJgUAJQgyAVgFAlQgJBBgvA+QhABThiAHIgjABQhLAAhTgXg");
	this.shape_27.setTransform(599.3,171.2,0.998,0.998);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f("#FCFDFB").s().p("AhCALIAmguQAngxAJgHQAOgMACAAQAFABgBAYQgFBSAUAiQAMAVAAATQABAQgLAJQg9gcg+hAg");
	this.shape_28.setTransform(399.5,30.9,0.998,0.998);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f("#FCFDFB").s().p("AiBDsQhXgfgIgBQgRgDikgBIBcgOQBigPAZgLQAVgIAjgVQAcgOAOAPQAXAaAjAbQgCgIgIgNQgRgbghgbQgngggQhMQgYh0BGiNQAFgMAKAnQANAzAaAhQAxA/BnAnQAHgZAhgjQArguAtgBQAtgBArAbQAcASASAXQAJALAOALIAOAMQAEAEAAADQAAAEgJACQhsAUgHA4QgKBBguA+QhABThiAHIghABQhMAAhUgXg");
	this.shape_29.setTransform(395.9,49,0.998,0.998);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f("#FCFDFB").s().p("AhCAMIAmguQAngyAJgHQAOgMACAAQAFABgBAYQgFBTAUAhQAMAWAAARQAAARgKAJQg8gag/hBg");
	this.shape_30.setTransform(316.8,10.3,0.998,0.998);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f("#FCFDFB").s().p("AiADsQhXgegJgCQgQgDilgBIBdgOQBhgPAagLQAUgIAjgVQAdgOAOAPQAXAaAiAbQgCgIgIgNQgQgbghgbQgngfgQhNQgYh0BGiNQAFgMAJAnQANAyAbAiQAwA/BoAnQAHgZAggjQArguAtgBQAugBAqAbQAcASASAXQAPASAWAQQAKAKgPADQhqATgJA5QgJBBgvA+QhABThhAHIghABQhMAAhUgXg");
	this.shape_31.setTransform(313.2,28.4,0.998,0.998);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f("#FCFDFB").s().p("AhDAMIAnguQAngxAJgIQAOgMACABQAGAAgCAYQgFBTAUAhQAMAVAAASQAAARgKAKQg9gcg/hAg");
	this.shape_32.setTransform(149.4,209.9,0.998,0.998);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f("#FCFDFB").s().p("AiBDsQhXgfgIgBQgKgChXgBIhUgBQCugYApgQQAVgIAjgWQAdgOAOAQQAWAaAjAbQgCgIgIgNQgRgbghgbQgmgggQhMQgZh0BGiNQACgFADADQAEAFAGAYQANAyAaAiQAxA/BnAnQAHgZAhgjQArguAtgBQAtgBArAbQAcASASAXQAOASAXAQQAEAEAAADQAAAEgJACQgpAJgTAIQgyAVgFAmQgJBBgvA+QhABThiAHIghABQhMAAhUgXg");
	this.shape_33.setTransform(145.8,227.9,0.998,0.998);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f("#FCFDFB").s().p("AhIAhIAdg1QAeg3AIgJQAKgOADAAQAFgBADAYQALBSAZAdQARATADARQADARgIALQhDgRhIgyg");
	this.shape_34.setTransform(544.9,221.4,0.998,0.998);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f("#FCFDFB").s().p("AkfDfQBdgiAXgPQASgLAfgcQAZgTARANQAbAVAnAUQgDgHgLgMQgVgYglgTQgsgYgehIQguhuAriXQABgFADACQAFAEAKAWQAXAwAgAbQA7A1BtATQACgaAagoQAhg1AtgKQAsgJAvASQAdAMAYAUQARAPAZAMQAMAHgPAGQgmARgRAMQgtAfACAlQAEBBgkBFQgvBeheAZQhaAXhogIQhbgOgIAAQgRAAiiAeg");
	this.shape_35.setTransform(545.4,242.6,0.998,0.998);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f("#FCFDFB").s().p("AhCAMIAmguQAngxAJgIQAOgMACABQAFAAgBAYQgFBTAUAhQAMAVAAASQAAARgKAKQg9gcg+hAg");
	this.shape_36.setTransform(436.4,354.5,0.998,0.998);

	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f("#FCFDFB").s().p("AiBDsQhWgfgJgBQgQgDilgBQCvgYAogQQAVgIAjgWQAdgOANAQQAXAaAjAbQgBgIgJgNQgRgbgggbQgngggQhMQgZh0BHiNQAEgLALAmQANAyAaAiQAwA+BoAoQAGgZAhgjQArguAtgBQAugBAqAbQAbASATAXQAOASAXAQQAEADAAAEQAAAEgJACQgnAIgUAJQgyAVgGAmQgJBBgvA+QhABThhAHIghABQhNAAhUgXg");
	this.shape_37.setTransform(432.8,372.6,0.998,0.998);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_37},{t:this.shape_36},{t:this.shape_35},{t:this.shape_34},{t:this.shape_33},{t:this.shape_32},{t:this.shape_31},{t:this.shape_30},{t:this.shape_29},{t:this.shape_28},{t:this.shape_27},{t:this.shape_26},{t:this.shape_25},{t:this.shape_24},{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol1, new cjs.Rectangle(0,0,639.8,398.5), null);


(lib.leadershiptext = function(mode,startPosition,loop) {
if (loop == null) { loop = false; }	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.text = new cjs.Text("LEADERSHIP", "bold 202px 'Source Sans Pro'", "#FFFFFF");
	this.text.lineHeight = 294;
	this.text.parent = this;
	this.text.setTransform(455,114.2,0.116,0.116);
	this.text._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text).wait(14).to({_off:false},0).wait(1).to({scaleX:0.16,scaleY:0.37,x:434.8,y:82.7},0).wait(1).to({scaleX:0.28,scaleY:0.61,x:373.7,y:51.2},0).wait(1).to({scaleX:0.47,scaleY:0.86,x:272.1,y:19.7},0).wait(1).to({scaleX:0.75,scaleY:1.11,x:129.6,y:-11.8},0).wait(1).to({scaleX:1.11,x:-53.4},0).wait(1).to({scaleX:1.11,x:-54.2},0).wait(21).to({_off:true},1).wait(2).to({_off:false,scaleX:1.17,scaleY:1.17,x:-82.5,y:-18.8},0).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = null;


(lib.ClipGroup_2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2 (mask)
	var mask_1 = new cjs.Shape();
	mask_1._off = true;
	mask_1.graphics.p("EjHPA36MAAAhvzMGOfAAAMAAABvzg");
	mask_1.setTransform(1275.2,357.8);

	// Layer 3
	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#FCFDFB").s().p("AmpPwQjEhTiYiXQiXiYhTjEQhWjMAAjeQAAjeBWjLQBTjECXiYQCYiYDEhTQDMhVDdAAQDfAADLBVQDEBTCYCYQCXCYBTDEQBWDLAADeQAADehWDMQhTDEiXCYQiYCXjEBTQjLBXjfAAQjdAAjMhXg");
	this.shape_5.setTransform(1152.1,338.1);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#FCFDFB").s().p("ApZWSQkWh1jWjXQjXjWh1kWQh6kfAAk7QAAk6B6kgQB1kVDXjWQDWjXEWh1QEfh6E6AAQE7AAEgB6QEVB1DWDXQDXDWB1EVQB6EgAAE6QAAE7h6EfQh1EWjXDWQjWDXkVB1QkgB6k7AAQk6AAkfh6g");
	this.shape_6.setTransform(1289,387.9);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#FCFDFB").s().p("ApZWSQkWh1jWjXQjXjWh1kVQh6kgAAk7QAAk6B6kfQB1kWDXjWQDWjXEWh1QEfh6E6AAQE7AAEgB6QEVB1DWDXQDXDWB1EWQB6EfAAE6QAAE7h6EgQh1EVjXDWQjWDXkVB1QkgB6k7AAQk6AAkfh6g");
	this.shape_7.setTransform(1512.7,388.4);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#FCFDFB").s().p("ArnbjQlYiRkJkJQkJkJiRlXQiWlkAAmFQAAmECWlkQCRlXEJkJQEJkJFYiRQFjiWGEAAQGFAAFkCWQFXCREJEJQEJEJCRFXQCWFkAAGEQAAGFiWFkQiRFXkJEJQkJEJlXCRQlkCWmFAAQmEAAljiWg");
	this.shape_8.setTransform(484.2,458.2);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#FCFDFB").s().p("Am1QNQjKhWicibQibichWjKQhYjRAAjlQAAjkBYjRQBWjKCbicQCcicDKhVQDRhYDkAAQDlAADRBYQDKBVCcCcQCbCcBWDKQBYDRAADkQAADlhYDRQhWDKibCcQicCbjKBWQjRBYjlAAQjkAAjRhYg");
	this.shape_9.setTransform(586.8,302.1);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#FCFDFB").s().p("Am1QNQjKhWicibQibichWjKQhYjRAAjlQAAjkBYjRQBWjKCbicQCcicDKhVQDRhYDkAAQDlAADRBYQDKBVCcCcQCbCcBWDKQBYDRAADkQAADlhYDRQhWDKibCcQicCbjKBWQjRBYjlAAQjkAAjRhYg");
	this.shape_10.setTransform(428.6,233.7);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#FCFDFB").s().p("AtTfiQmKimkvkvQkvkvinmKQismXAAm9QAAm9CsmXQCnmJEvkvQEvkvGKimQGXisG8AAQG+AAGWCsQGKCmEvEvQEvEvCnGJQCrGXABG9QgBG+irGWQinGKkvEvQkvEvmKCmQmWCsm+AAQm8AAmXisg");
	this.shape_11.setTransform(219.1,256.2);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#FCFDFB").s().p("AqCXxQkoh9jljlQjkjkh9koQiCkzAAlQQAAlPCCkyQB9kpDkjkQDljlEoh+QEziBFPAAQFQAAEyCBQEpB+DkDlQDlDkB9EpQCCEyAAFPQAAFQiCEzQh9EojlDkQjkDlkpB9QkyCClQAAQlPAAkziCg");
	this.shape_12.setTransform(743.2,325.2);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#FCFDFB").s().p("AqCXxQkoh9jkjkQjljlh9kpQiCkyAAlQQAAlOCCkzQB9koDljmQDkjkEoh9QEziCFPAAQFQAAEyCCQEpB9DkDkQDlDlB+EpQCBEyAAFPQAAFQiBEyQh+EpjlDlQjkDkkpB9QkyCClQAAQlPAAkziCg");
	this.shape_13.setTransform(941.1,278.5);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#FCFDFB").s().p("AsedkQlxickckcQkckciclxQihl9AAmiQAAmgChl+QCclxEckcQEckcFxicQF+ihGgAAQGiAAF9ChQFxCcEcEcQEcEcCcFxQChF+AAGgQAAGiihF9QicFxkcEcQkcEclxCcQl9ChmiAAQmgAAl+ihg");
	this.shape_14.setTransform(1700.7,365.4);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#FCFDFB").s().p("EgSXArgQoejlmimjQmimijmoeQjtoxAApnQAApmDtoxQDmoeGimiQGimiIejmQIyjtJlAAQJnAAIxDtQIeDlGiGjQGjGiDlIeQDtIxAAJmQAAJnjtIxQjlIemjGiQmiGjoeDlQoxDtpnAAQplAAoyjtg");
	this.shape_15.setTransform(2052.2,413.4);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#FCFDFB").s().p("EgSXArgQoejmmimiQmimijmoeQjtoyAApmQAApmDtoxQDmoeGimiQGimjIejlQIyjtJlAAQJnAAIxDtQIeDlGiGjQGjGiDlIeQDtIxAAJmQAAJmjtIyQjlIemjGiQmiGioeDmQoxDtpnAAQplAAoyjtg");
	this.shape_16.setTransform(2248.2,302.1);

	var maskedShapeInstanceList = [this.shape_5,this.shape_6,this.shape_7,this.shape_8,this.shape_9,this.shape_10,this.shape_11,this.shape_12,this.shape_13,this.shape_14,this.shape_15,this.shape_16];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask_1;
	}

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.ClipGroup_2, new cjs.Rectangle(0,0,2550.3,715.6), null);


(lib.cloudstop = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.ClipGroup();
	this.instance.parent = this;
	this.instance.setTransform(466.2,84.6,1,1,0,0,0,57.6,27.1);

	this.instance_1 = new lib.ClipGroup_1();
	this.instance_1.parent = this;
	this.instance_1.setTransform(42.6,67.9,1,1,0,0,0,42.6,20);

	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AuGEqQmtgYgvg2QhUhhAiibQAKgxAVgxIATgnMArWgCRIAOBGQAPBWAHBMQAYDzg8A7QgiAimlAbQmQAaoGAGIj2ACQmIAAkfgRg");
	this.shape.setTransform(1620.7,103.6);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FFFFFF").s().p("AkgD6Qg4hBAth3QAth2B3hnQB4hoB8gcQB8gbA4BBQA4BAgtB4QgtB2h4BnQh4Boh7AbQgmAJgfAAQhIAAgngug");
	this.shape_1.setTransform(1554.5,77.8);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#FFFFFF").s().p("AohGFQhrhMg7hiQg9hnAAhwQAAhvA9hnQA7hiBrhMQDiiiE/AAQFAAADiCiQBrBMA7BiQA9BnAABvQAABwg9BnQg7BihrBMQjiChlAAAQk/AAjiihg");
	this.shape_2.setTransform(1636.1,55.1);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#FFFFFF").s().p("Aj5D7QhohpAAiSQAAiRBohpQBnhnCSAAQCTAABnBnQBoBpAACRQAACShoBpQhnBniTAAQiSAAhnhng");
	this.shape_3.setTransform(1725,77.8);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#FFFFFF").s().p("AjKDLQhUhUAAh3QAAh2BUhUQBUhUB2AAQB3AABUBUQBUBUAAB2QAAB3hUBUQhUBUh3AAQh2AAhUhUg");
	this.shape_4.setTransform(1509.5,95.1);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape},{t:this.instance_1},{t:this.instance}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.cloudstop, new cjs.Rectangle(0,0,1764.7,135.1), null);


(lib.BIRDS = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Symbol1();
	this.instance.parent = this;
	this.instance.setTransform(319.9,199.2,1,1,0,0,0,319.9,199.2);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.BIRDS, new cjs.Rectangle(0,0,639.8,398.5), null);


// stage content:
(lib.leadership = function(mode,startPosition,loop) {
if (loop == null) { loop = false; }	this.initialize(mode,startPosition,loop,{});

	// leadership text.ai
	this.instance = new lib.leadershiptext();
	this.instance.parent = this;
	this.instance.setTransform(990,286.9,1,1,0,0,0,514.6,128.9);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(26));

	// leader logo.ai
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("ABQCkIAAiHIgJAAQgEAbgQAdQghA5g7ALQgWAEgqAAQgGAAgGgDQgMgHAAgSQAAgsANgeQAVg0A2AAIAAgHQgYACgVgPQgrgeAAhXQAAgFAEgGQAIgKAVAAQAnAAAVADQAkAGARASQASASAMAZQAGAOALAjIAHAAIAAh/IAZAAIARADQARAIAAAWIAAEEQAAAJgEAIQgJARgUAAg");
	this.shape.setTransform(1234.7,513.5);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#F9A01B").s().p("AjRDSQhXhXgBh7QABh7BXhWQBXhYB6AAQB8AABWBYQBYBWgBB7QABB7hYBXQhWBYh8gBQh6ABhXhYg");
	this.shape_1.setTransform(1234.7,513.6);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape}]}).wait(26));

	// bottom clouds.ai
	this.instance_1 = new lib.ClipGroup_2();
	this.instance_1.parent = this;
	this.instance_1.setTransform(915.3,1063.5,1,1,0,0,0,1275.2,357.8);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(26));

	// birds.ai
	this.instance_2 = new lib.BIRDS();
	this.instance_2.parent = this;
	this.instance_2.setTransform(334.2,904.9,1,1,0,0,0,319.9,199.2);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(1).to({x:356.8,y:893.4},0).wait(1).to({x:379.4,y:881.9},0).wait(1).to({x:402,y:870.4},0).wait(1).to({x:424.7,y:858.8},0).wait(1).to({x:447.3,y:847.3},0).wait(1).to({x:469.9,y:835.8},0).wait(1).to({x:492.6,y:824.3},0).wait(1).to({x:515.2,y:812.8},0).wait(1).to({x:537.8,y:801.3},0).wait(1).to({x:560.5,y:789.7},0).wait(1).to({x:583.1,y:778.2},0).wait(1).to({x:605.7,y:766.7},0).wait(1).to({x:628.4,y:755.2},0).wait(1).to({x:651,y:743.7},0).wait(1).to({x:673.6,y:732.2},0).wait(1).to({x:696.3,y:720.6},0).wait(1).to({x:718.9,y:709.1},0).wait(1).to({x:741.5,y:697.6},0).wait(1).to({x:764.2,y:686.1},0).wait(1).to({x:786.8,y:674.6},0).wait(1).to({x:809.4,y:663.1},0).wait(1).to({x:832.1,y:651.5},0).wait(1).to({x:854.7,y:640},0).wait(1).to({x:877.3,y:628.5},0).wait(1).to({x:900,y:617},0).wait(1));

	// top clouds.ai
	this.instance_3 = new lib.cloudstop();
	this.instance_3.parent = this;
	this.instance_3.setTransform(976.3,105.5,1,1,0,0,0,882.3,67.5);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(26));

	// bg
	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#0099FF").s().p("EibGBROMAAAiibME2MAAAMAAACibg");
	this.shape_2.setTransform(994.7,521.8);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#FFFFFF").s().p("Eg9NAgVMAAAhApMB6cAAAMAAABApg");
	this.shape_3.setTransform(967.7,518.8);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#FFFFFF").s().p("EiaUBPMMAAAieXME0oAAAMAAACeXg");
	this.shape_4.setTransform(989.7,508.8);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#FFFFFF").s().p("Eg/uAcvMAAAg5dMB/dAAAMAAAA5dg");
	this.shape_5.setTransform(409.9,185.9);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2}]}).wait(26));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(630.1,512,2550.3,1419.3);
// library properties:
lib.properties = {
	width: 1980,
	height: 1020,
	fps: 24,
	color: "#FFFFFF",
	opacity: 1.00,
	webfonts: {},
	manifest: [],
	preloads: []
};




})(lib = lib||{}, images = images||{}, createjs = createjs||{}, ss = ss||{}, AdobeAn = AdobeAn||{});
var lib, images, createjs, ss, AdobeAn;
</script>
<script>
var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
function init() {
	canvas = document.getElementById("canvas");
	anim_container = document.getElementById("animation_container");
	dom_overlay_container = document.getElementById("dom_overlay_container");
	handleComplete();
}
function handleComplete() {
	//This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
	var preloaderDiv = document.getElementById("_preload_div_");
	preloaderDiv.style.display = 'none';
	canvas.style.display = 'block';
	exportRoot = new lib.leadership();
	stage = new createjs.Stage(canvas);
	stage.addChild(exportRoot);	
	//Registers the "tick" event listener.
	fnStartAnimation = function() {
		createjs.Ticker.setFPS(lib.properties.fps);
		createjs.Ticker.addEventListener("tick", stage);
	}	    
	//Code to support hidpi screens and responsive scaling.
	function makeResponsive(isResp, respDim, isScale, scaleType) {		
		var lastW, lastH, lastS=1;		
		window.addEventListener('resize', resizeCanvas);		
		resizeCanvas();		
		function resizeCanvas() {			
			var w = lib.properties.width, h = lib.properties.height;			
			var iw = window.innerWidth, ih=window.innerHeight;			
			var pRatio = window.devicePixelRatio || 1, xRatio=iw/w, yRatio=ih/h, sRatio=1;			
			if(isResp) {                
				if((respDim=='width'&&lastW==iw) || (respDim=='height'&&lastH==ih)) {                    
					sRatio = lastS;                
				}				
				else if(!isScale) {					
					if(iw<w || ih<h)						
						sRatio = Math.min(xRatio, yRatio);				
				}				
				else if(scaleType==1) {					
					sRatio = Math.min(xRatio, yRatio);				
				}				
				else if(scaleType==2) {					
					sRatio = Math.max(xRatio, yRatio);				
				}			
			}			
			canvas.width = w*pRatio*sRatio;			
			canvas.height = h*pRatio*sRatio;
			canvas.style.width = anim_container.style.width = dom_overlay_container.style.width = preloaderDiv.style.width = w*sRatio+'px';				
			canvas.style.height = anim_container.style.height = dom_overlay_container.style.height = preloaderDiv.style.height = h*sRatio+'px';
			stage.scaleX = pRatio*sRatio;			
			stage.scaleY = pRatio*sRatio;			
			lastW = iw; lastH = ih; lastS = sRatio;		
		}
	}
	makeResponsive(true,'both',true,1);	
	fnStartAnimation();
}
</script>

<body onload="init();" style="margin:0px;">
	<div id="animation_container" style="background-color:rgba(255, 255, 255, 1.00); width:100%; height:1020px">
		<canvas id="canvas" width="100%" height="1020" style="position: absolute; display: none; background-color:rgba(255, 255, 255, 1.00);"></canvas>
		<div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; width:100%; height:1020px; position: absolute; left: 0px; top: 0px; display: none;">
		</div>
	</div>
    <div id='_preload_div_' style='display: inline-block; height:1020px; width: 100%; vertical-align=middle;position:absolute;left:0px;top:0px;text-align: center;'>	<span style='display: inline-block; height: 100%; vertical-align: middle;'></span>	<img src=images/_preloader.gif style='vertical-align: middle; max-height: 100%'/></div>
</body>



<?php if( $ad = vce_get_option('ad_below_header') ): ?>
	<div class="vce-ad-below-header vce-ad-container"><?php echo do_shortcode( $ad ); ?></div>
<?php endif; ?>