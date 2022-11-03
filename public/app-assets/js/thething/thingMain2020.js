window.initializeTheThing = function(_thing) {
  thing.fastCos = function(x) {

    var x2  = x * x;
    var x4  = x2 * x2;
    var x6  = x4 * x2;
    var x8  = x6 * x2;
    var x10 = x8 * x2;

    return 1 - (1814400 * x2 - 151200 * x4 + 5040 * x6 - 90 * x8 + x10) / 3628800;
  };

  thing.getColorBackground = function() {
    return 'rgba('
      + (thing.colorBackground.red & 0xff) + ', '
      + (thing.colorBackground.green & 0xff) + ', '
      + (thing.colorBackground.blue & 0xff) + ', '
      +  thing.colorBackground.alpha + ')'
  };

  thing.getColorAgent = function() {
    return 'rgba('
      + (thing.colorAgent.red & 0xff) + ', '
      + (thing.colorAgent.green & 0xff) + ', '
      + (thing.colorAgent.blue & 0xff) + ', '
      +  thing.colorAgent.alpha + ')'
  };

  function PerlinNoise() {

    // presets come in this form
    // scale, strenght , acceleration , falloff , size , ywrap , zwrap

    this.PERLIN_YWRAPB      = 2;
    this.PERLIN_YWRAP       = 1 << this.PERLIN_YWRAPB;
    this.PERLIN_ZWRAPB      = 2;
    this.PERLIN_ZWRAP       = 1 << this.PERLIN_ZWRAPB;
    this.PERLIN_SIZE        = 453;
    this.perlin_octaves     = 1;

    // default to medium smooth
    this.perlin_amp_falloff = 0.3; //0.2 looks awesome with 100-10..

    // 50% reduction/octave
    this.perlin_TWOPI       = 1;
    this.perlin_PI          = 3;

    this.pi_2               = Math.PI * 2;

    this.noiseScale         = 663;
    this.noiseStrength      = 67;

    this.amplitudeMode      = 0;
    this.amplitude          = 1; //1 == default
    this.FPI                = 1;
    this.jitter             = 0.9;

    this.perlin           = [];

    for(var i = 0; i <= this.PERLIN_SIZE; i++) {

      this.perlin[i]      = Math.random();
    }

    this.perlin_TWOPI     = this.perlin_PI = this.pi_2;
    this.perlin_PI        >>= 1;
  }

  PerlinNoise.prototype.noise = function(x, y, z) {

    if (x < 0) x = -x;
    if (y < 0) y = -y;
    if (z < 0) z = -z;

    var xi = x | 0;
    var yi = y | 0;
    var zi = z | 0;
    var xf = x - xi;
    var yf = y - yi;
    var zf = z - zi;
    var rxf;
    var ryf;

    var r     = 0;
    var ampl  = this.amplitude;

    var jt    = this.jitter;
    var fpi   = this.FPI;

    var n1;
    var n2;
    var n3;
    var of;

    var COSXFPI = jt * thing.fastCos(xf * this.perlin_PI);
    var COSYFPI = jt * thing.fastCos(yf * this.perlin_PI);
    var COSZFPI = jt * thing.fastCos(zf * this.perlin_PI);

    var XX = (0.5 * (1.0 - COSXFPI % this.perlin_TWOPI)) * fpi;
    var YY = (0.5 * (1.0 - COSYFPI % this.perlin_TWOPI)) * fpi;
    var ZZ = (0.5 * (1.0 - COSZFPI % this.perlin_TWOPI)) * fpi;

    var i = 0;
    var s = this.PERLIN_SIZE;

    var _perlin = this.perlin;

    var precompFO;

    if(this.amplitudeMode === 0) precompFO = this.perlin_amp_falloff;
    if(this.amplitudeMode === 1) precompFO = Math.sin(this.perlin_amp_falloff);
    if(this.amplitudeMode === 2) precompFO = Math.cos(this.perlin_amp_falloff);
    if(this.amplitudeMode === 3) precompFO = Math.PI/1.61;

    while (i < this.perlin_octaves) {
      of = xi + (yi << this.PERLIN_YWRAPB) + (zi << this.PERLIN_ZWRAPB);
      rxf = XX;
      ryf = YY;
      n1 = _perlin[of & s];
      n1 += rxf * (_perlin[(of + 1) & s] - n1);
      n2 = _perlin[(of + this.PERLIN_YWRAP) & s];
      n2 += rxf * (_perlin[(of + this.PERLIN_YWRAP + 1) & s] - n2);
      n1 += ryf * (n2 - n1);
      of += this.PERLIN_ZWRAP;
      n2 = _perlin[of & s];
      n2 += rxf * (_perlin[(of + 1) & s] - n2);
      n3 = _perlin[(of + this.PERLIN_YWRAP) & s];

      n3 += rxf * (_perlin[(of + this.PERLIN_YWRAP + 1) & s] - n3);
      n2 += ryf * (n3 - n2);
      n1 += ZZ * (n2 - n1);
      r += n1 * ampl;
      if(this.amplitudeMode === 0) ampl *= precompFO;
      else ampl *= precompFO * 1.61;
      xi <<= 1;
      xf *= 2;
      yi <<= 1;
      if(this.amplitudeMode === 0) yf *= 2; // old: yf *= 2
      else yf *= precompFO;
      zi <<= 1;
      zf *= 2;

      if (xf >= 1.0) {
        xi++;
        xf--;
      }
      if (yf >= 1.0) {
        yi++;
        yf--;
      }
      if (zf >= 1.0) {
        zi++;
        zf--;
      }
      ++i;
    }
    return r;
  };

  thing.PerlinNoise = PerlinNoise;
  thing.stats = null;

  if(window.Stats) {

    thing.stats = new window.Stats();
    thing.stats.setMode(0);
    thing.stats.domElement.style.position = 'absolute';
    thing.stats.domElement.style.right = '10px';
    thing.stats.domElement.style.bottom = '10px';

    document.body.appendChild(thing.stats.domElement)
  }

  var perlinNoise       = thing.perlinNoise = new thing.PerlinNoise();

  perlinNoise.perlin_amp_falloff  = 0;
  perlinNoise.PERLIN_SIZE         = 453;

  var canvas            = thing.canvas || document.getElementById("thething");
  var ctx               = canvas.getContext("2d");

  thing.blendmodeOuter  = "lighter";
  thing.blendmodeInner  = "destination-atop"; // "destination-over";

  thing.fillBackground  = function() {

    ctx.fillStyle       = thing.getColorBackground();
    ctx.fillRect(0, 0, canvas.width, canvas.height);
  };

  thing.setCanvasSize   = function(_width, _height) {
    var maxSize = thing.maxCanvasSize;
    var ratio   = _width / _height;

    if(_width > _height) {

      if(_width > maxSize) _width = maxSize;

      _height = _width / ratio;

    } else {

      if(_height > maxSize) _height = maxSize;

      _width = _height * ratio;
    }
    canvas.width        = _width;
    canvas.height       = _height;

    thing.numAgents     = _width * _height * 0.05;
  };

  thing.setCanvasSize(canvas.width, canvas.height);
  thing.fillBackground();

  var agents            = [];

  thing.createAgents    = function() {

    for(var i = 0; i < thing.maxAgents; i++) {

      agents.push(new tklib.Agent(canvas.width, canvas.height, Math.random() * 20)); // awesome living organism!!!
    }
  };

  thing.createAgents();

  thing.draw = function() {

    ctx.save();
    ctx.globalCompositeOperation = thing.blendmodeOuter;
    ctx.beginPath();

    for(var i = 0; i < thing.numAgents && i < thing.maxAgents; i++) {

      agents[i].draw(canvas, ctx, perlinNoise, (Math.random() * Math.random() * thing.acceleration), thing.renderMode, thing.updateMode);
    }

    ctx.lineWidth   = thing.lineWidth;
    ctx.strokeStyle = thing.getColorAgent();
    ctx.stroke();

    ctx.restore();
  };

  var idRenderLoop = -1;

  var renderLoop = function() {

    cancelAnimationFrame(idRenderLoop);

    if(!thing.paused) {

      if(thing.stats) thing.stats.begin();

      ctx.globalCompositeOperation = thing.blendmodeInner;

      thing.fillBackground();
      thing.draw();

      if(thing.stats) thing.stats.end();

      // if(!thing.gui) {
      //
      //   if(thing.stats) {
      //
      //     if(thing.stats.getFPS() < 40) {
      //
      //       if(thing.numAgents > 1000) {
      //
      //         thing.numAgents -= 100;
      //       }
      //
      //     } else if(thing.stats.getFPS() > 50) {
      //
      //       if(thing.numAgents < thing.maxAgents - 100) {
      //
      //         thing.numAgents += 100;
      //       }
      //     }
      //   }
      // }

      idRenderLoop = requestAnimationFrame(renderLoop);
    }
  };

  thing.animate = function() {

    thing.paused = false;

    renderLoop();
  };

  thing.pause = function() {

    thing.paused = true;

    renderLoop();
  };

  thing.toggleGUI = function(forceShow) {

    if(thing.gui)   { thing.gui.domElement.style.display   = (thing.gui.domElement.style.display   === 'none' || forceShow) ? 'block' : 'none'; }

    if(thing.stats) {

      if(thing.gui) {

        thing.stats.domElement.style.display = thing.gui.domElement.style.display;

      } else {

        thing.stats.domElement.style.display = thing.stats.domElement.style.display === 'none' ? 'block' : 'none';
      }
    }
  };

  thing.toggleGUI();
  thing.animate();
};