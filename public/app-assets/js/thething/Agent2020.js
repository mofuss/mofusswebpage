var tklib = tklib || {};

(function() {

  function Agent(width, height, fixedAcceleration) {

    this.px = this.pOldX    = Math.random() * width;
    this.py = this.pOldY    = Math.random() * height;

    this.noiseZ             = Math.random() * 0.40;
    this.noiseZVelocity     = 0.01;

    this.fixedAcceleration  = fixedAcceleration;
  }

  Agent.prototype.draw = function(canvas, ctx, perlinNoise, stepSize, renderMode, updateMode) {

    var iw                = canvas.width;
    var ih                = canvas.height;

    var resetBorder       = 10;
    var angle             = perlinNoise.noise(this.px / perlinNoise.noiseScale, this.py / perlinNoise.noiseScale, this.noiseZ) * perlinNoise.noiseStrength;
    var acceleration = this.fixedAcceleration;

    // default (else): updateMode === 0

    if(updateMode === 1) {

      this.px += Math.sin(angle / this.noiseZ) * -stepSize;
      this.py += Math.cos(angle) * stepSize;

    } else if(updateMode === 2) {

      //New y = old y + speed * sin(angle)
      this.px += acceleration * Math.cos(angle * Math.PI / acceleration);
      this.py += acceleration * Math.sin(angle * Math.PI / acceleration);

    }  else if(updateMode === 3) {

      this.px += Math.cos(perlinNoise.noiseScale - angle) * acceleration;
      this.py += Math.tan(perlinNoise.noiseScale - angle) * acceleration;

      this.px += Math.sin(angle);
      this.py += Math.cos(angle);

    } else if(updateMode === 4) {

      this.px += acceleration * Math.cos(angle * Math.PI / acceleration);
      this.py += acceleration * Math.sin(angle * Math.PI / acceleration);

      this.pOldX += Math.cos(255) * angle;
      this.pOldY += Math.sin(angle) * 255;

    } else if(updateMode === 5) {

      this.px += acceleration * Math.cos(angle * Math.PI / acceleration);
      this.py += acceleration * Math.sin(angle * Math.PI / acceleration);

      this.pOldX += Math.cos(angle) * stepSize;
      this.pOldY += Math.sin(angle) * stepSize;

      this.px += Math.PI * 2 ;
      this.py += Math.sin(angle) * stepSize;
      this.pOldX += (Math.PI * 2);

    } else if(updateMode === 6) {

      this.px += acceleration * Math.tan(angle * Math.PI / this.noiseZ);
      this.py += acceleration * Math.sin(angle * Math.PI / this.noiseZ);

    }  else if(updateMode === 7) {

      angle = perlinNoise.noise(this.px / perlinNoise.noiseScale, this.py / perlinNoise.noiseScale, this.noiseZ) * acceleration;

      this.px += acceleration * Math.cos(angle * Math.PI / acceleration);
      this.py = Math.sin(this.px) + (this.py + acceleration * Math.sin(angle * Math.PI / acceleration));

      this.pOldX += Math.cos(Math.PI) * angle ;
      this.pOldY += Math.sin(angle) * Math.PI;

    }  else if(updateMode === 8) {

      angle *= 1.61;

      this.px += acceleration * Math.cos(angle * Math.PI / acceleration);
      this.py = Math.sin(this.px) + (this.py + acceleration * Math.sin(angle * Math.PI / acceleration));

      //looks cool too
      //angle -= stepSize % Math.abs(this.px);

      this.pOldX += Math.cos(Math.PI) * angle ;
      this.pOldY += Math.sin(angle) * Math.PI;


    } else if(updateMode === 9) {

      angle *= Math.sin(1.61) * angle * 0.01;
      // angle *= (Math.sin(angle) * perlinNoise.noiseScale * 0.01) * 0.1;

      //makes it more "vibrant"
      if(angle % 2 === 1) angle = 1.61;

      this.px += acceleration * Math.cos(angle * Math.PI / acceleration);
      this.py += acceleration * Math.sin(angle * Math.PI / acceleration) + Math.sin(this.px);

      //looks cool too
      // angle -= stepSize % Math.abs(this.px);

      this.pOldX += Math.cos(Math.PI) * angle ;
      this.pOldY += Math.sin(angle) * Math.PI;

    } else if(updateMode === 10) {

      // angle *= Math.sin(1.61) * angle * 0.01;
      // angle *= (Math.sin(angle) * perlinNoise.noiseScale * 0.01) * 0.1;
      angle *= (Math.sin(angle) * perlinNoise.noiseScale * 0.01) * 0.1;


      this.px += acceleration * Math.cos(angle * Math.PI / acceleration);
      this.py += acceleration * Math.sin(angle * Math.PI / acceleration) + Math.sin(this.px);

      this.pOldX += Math.cos(Math.PI) * angle ;
      this.pOldY += Math.sin(angle) * Math.PI;

    } else {

      //default

      this.px += Math.cos(angle) * stepSize;
      this.py += Math.sin(angle) * stepSize;
    }

    var isOutside = false;

    if(this.px <= -resetBorder) {

      this.px = this.pOldX = iw + resetBorder;

      isOutside = true;

    } else if (this.px > iw) {

      this.px = this.pOldX = -resetBorder;

      isOutside = true;
    }

    if (this.py <= -resetBorder) {

      this.py = this.pOldY = ih + resetBorder;

      isOutside = true;

    } else if (this.py > ih) {

      this.py = this.pOldY = -resetBorder;

      isOutside = true;
    }

    if(!isOutside) {

      if(renderMode === 0) {

        ctx.moveTo(this.pOldX, this.pOldY);
        ctx.lineTo(this.px, this.py);

        this.pOldX = this.px;
        this.pOldY = this.py;

      } else if (renderMode === 1) {

        ctx.arc(this.px, this.py, 1, 0, 2 * Math.PI);

        this.pOldX = this.px;
        this.pOldY = this.py;

      } else if(renderMode === 2) {

        this.fastrect(this.pOldX, this.pOldY, this.px, this.py, ctx);

        this.pOldX = this.px;
        this.pOldY = this.py;

      } else if(renderMode === 3) {

        this.efla(this.pOldX, this.pOldY, this.px, this.py, ctx);

        this.pOldX = this.px;
        this.pOldY = this.py;

      } else if(renderMode === 4) {

        //translate image x/y
      }
    }

    this.noiseZ += this.noiseZVelocity;
  };

  /**
   *   "Extremely Fast Line Algorithm"
   *   @author Po-Han Lin (original version: http://www.edepot.com/algorithm.html)
   *   @author Simo Santavirta (AS3 port: http://www.simppa.fi/blog/?p=521)
   *   @author Jackson Dunstan (minor formatting)
   *   @param x X component of the start point
   *   @param y Y component of the start point
   *   @param x2 X component of the end point
   *   @param y2 Y component of the end point
   *   @param ctx Canvas context
   */
  Agent.prototype.efla =  function (x, y, x2, y2, ctx) {

    var shortLen = y2 - y;
    var longLen = x2 - x;
    var yLonger = true;

    if ((shortLen ^ (shortLen >> 31)) - (shortLen >> 31) > (longLen ^ (longLen >> 31)) - (longLen >> 31)) {
      shortLen ^= longLen;
      longLen ^= shortLen;
      shortLen ^= longLen;
      yLonger = true;
    } else {
      yLonger = false;
    }

    var inc = longLen < 0 ? -1 : 1;
    var multDiff = longLen === 0 ? shortLen  : (shortLen / longLen) ;

    if (yLonger) {

      for (var i = 0; i <= longLen; i += inc) {
        //bmd.setPixel32(x + i * multDiff, y + i, color | ((alpha * 0xff) << 24));
        //this.setPixel(x + i * multDiff, y + i, color, bmd);
        //this.setPixel(bmd , x + i * multDiff, y + i, 0,0, 0 , 255 );
        //this.setPixel(x + i * multDiff,y + i)
        ctx.fillRect(x + i * multDiff,y + i,1,1)
      }

    } else {

      for (i = 0; i <= longLen; i += inc) {
        //bmd.setPixel32(x + i, y + i * multDiff, color | ((alpha * 0xff) << 24));
        //this.setPixel(x + i, y + i * multDiff, color, bmd);
        //this.setPixel(bmd, x + i, y + i * multDiff , 0,0,0, 255);
        //this.setPixel(x + i, y + i * multDiff)
        ctx.fillRect(x + i, y + i * multDiff,1,1)
      }
    }
  };

  Agent.prototype.fastrect =  function (x, y, x2, y2, ctx) {

    var x1 = x2;
    var x0 = x;
    var y1 = y2;
    var y0 = y;

    var dx = Math.abs(x1 - x0);
    var dy = Math.abs(y1 - y0);
    var sx = (x0 < x1) ? 1 : -1;
    var sy = (y0 < y1) ? 1 : -1;
    var err = dx - dy;
    var e2;

    while(true) {

      ctx.fillRect(x0, y0, 2 , 2);

      if ((x0 | 0 === x1 | 0) && (y0 |0  === y1 | 0)) break;
      e2 = 2 * err;
      if (e2 >-dy){ err -= dy; x0  += sx | 0; }
      if (e2 < dx){ err += dx; y0  += sy | 0; }
    }
  };

  tklib.Agent = Agent;

})();