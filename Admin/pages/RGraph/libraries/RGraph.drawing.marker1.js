    /**
    * o------------------------------------------------------------------------------o
    * | This file is part of the RGraph package - you can learn more at:             |
    * |                                                                              |
    * |                          http://www.rgraph.net                               |
    * |                                                                              |
    * | This package is licensed under the RGraph license. For all kinds of business |
    * | purposes there is a small one-time licensing fee to pay and for non          |
    * | commercial  purposes it is free to use. You can read the full license here:  |
    * |                                                                              |
    * |                      http://www.rgraph.net/LICENSE.txt                       |
    * o------------------------------------------------------------------------------o
    */


    
    /**
    * Having this here means that the RGraph libraries can be included in any order, instead of you having
    * to include the common core library first.
    */
    if (typeof(RGraph) == 'undefined') RGraph = {};
    if (typeof(RGraph.Drawing) == 'undefined') RGraph.Drawing = {};




    /**
    * The constructor. This function sets up the object. It takes the ID (the HTML attribute) of the canvas as the
    * first argument and the data as the second. If you need to change this, you can.
    * 
    * @param string id    The canvas tag ID
    * @param number x    The X position of the label
    * @param number y    The Y position of the label
    * @param number text The text used - should be a single character (unless you've significantly increased
    *                    the size of the marker.
    */
    RGraph.Drawing.Marker1 = function (id, x, y, radius, text)
    {
        this.id      = id;
        this.canvas  = document.getElementById(id);
        this.context = this.canvas.getContext ? this.canvas.getContext("2d") : null;


        /**
        * Store the properties
        */
        this.centerx = x;
        this.centery = y;
        this.radius  = radius;
        this.text    = text;


        /**
        * This puts a reference to this object on to the canvas.
        */
        this.canvas.__object__ = this;


        /**
        * This defines the type of this shape
        */
        this.type = 'drawing.marker1';


        /**
        * This facilitates easy object identification, and should always be true
        */
        this.isRGraph = true;


        /**
        * This adds a uid to the object that you can use for identification purposes
        */
        this.uid = RGraph.CreateUID();


        /**
        * This adds a UID to the canvas for identification purposes
        */
        this.canvas.uid = this.canvas.uid ? this.canvas.uid : RGraph.CreateUID();


        /**
        * This does a few things, for example adding the .fillText() method to the canvas 2D context when
        * it doesn't exist. This facilitates the graphs to be still shown in older browser (though without
        * text obviously). You'll find the function in RGraph.common.core.js
        */
        RGraph.OldBrowserCompat(this.context);


        /**
        * Some example background properties
        */
        this.properties =
        {
            'chart.strokestyle':        'black',
            'chart.fillstyle':          'white',
            'chart.linewidth':          2,
            'chart.text.color':         'black',
            'chart.text.size':          12,
            'chart.text.font':          'Arial',
            'chart.events.click':       null,
            'chart.events.mousemove':   null,
            'chart.shadow':             true,
            'chart.shadow.color':       '#aaa',
            'chart.shadow.offsetx':     0,
            'chart.shadow.offsety':     0,
            'chart.shadow.blur':       15,
            'chart.highlight.stroke':   'transparent',
            'chart.highlight.fill':     'rgba(255,255,255,0.7)',
            'chart.tooltips':           null,
            'chart.tooltips.highlight': true,
            'chart.tooltips.event':     'onclick',
            'chart.align':              'center'
        }

        /**
        * A simple check that the browser has canvas support
        */
        if (!this.canvas) {
            alert('[DRAWING.MARKER1] No canvas support');
            return;
        }
        
        /**
        * This can be used to store the coordinates of shapes on the canvas
        */
        this.coords = [];



        /**
        * Objects are now always registered so that the chart is redrawn if need be.
        */
        RGraph.Register(this);
    }




    /**
    * A setter method for setting graph properties. It can be used like this: obj.Set('chart.strokestyle', '#666');
    * 
    * @param name  string The name of the property to set
    * @param value mixed  The value of the property
    */
    RGraph.Drawing.Marker1.prototype.Set = function (name, value)
    {
        this.properties[name.toLowerCase()] = value;
    }




    /**
    * A getter method for retrieving graph properties. It can be used like this: obj.Get('chart.strokestyle');
    * 
    * @param name  string The name of the property to get
    */
    RGraph.Drawing.Marker1.prototype.Get = function (name)
    {
        return this.properties[name.toLowerCase()];
    }




    /**
    * Draws the circle
    */
    RGraph.Drawing.Marker1.prototype.Draw = function ()
    {
        /**
        * Fire the onbeforedraw event
        */
        RGraph.FireCustomEvent(this, 'onbeforedraw');

        /**
        * DRAW THE MARKER HERE
        */
        this.context.beginPath();
        
            if (this.properties['chart.shadow']) {
                RGraph.SetShadow(this, this.properties['chart.shadow.color'], this.properties['chart.shadow.offsetx'], this.properties['chart.shadow.offsety'], this.properties['chart.shadow.blur']);
            }
        
            this.context.lineWidth   = this.properties['chart.linewidth'];
            this.context.strokeStyle = this.properties['chart.strokestyle'];
            this.context.fillStyle   = this.properties['chart.fillstyle'];
        
            // This function draws the actual marker
            this.DrawMarker();
        
        
        this.context.stroke();
        this.context.fill();
        
        // Turn the shadow off
        RGraph.NoShadow(this);
        
        // Now draw the text on the marker
        this.context.fillStyle = this.properties['chart.text.color'];
        
        // Draw the text on the marker
        RGraph.Text(this.context,
                    this.properties['chart.text.font'],
                    this.properties['chart.text.size'],
                    this.coords[0][0] - 1,
                    this.coords[0][1] - 1,
                    this.text,
                    'center',
                    'center');

        /**
        * Fire the ondraw event
        */
        RGraph.FireCustomEvent(this, 'ondraw');
    }



    /**
    * The getObjectByXY() worker method
    */
    RGraph.Drawing.Marker1.prototype.getObjectByXY = function (e)
    {
        var mouseXY = RGraph.getMouseXY(e);

        if (RGraph.getHypLength(this.coords[0][0], this.coords[0][1], mouseXY[0], mouseXY[1]) <= this.coords[0][2]) {
            return this;
        }
    }



    /**
    * Not used by the class during creating the shape, but is used by event handlers
    * to get the coordinates (if any) of the selected bar
    * 
    * @param object e The event object
    * @param object   OPTIONAL You can pass in the bar object instead of the
    *                          function using "this"
    */
    RGraph.Drawing.Marker1.prototype.getShape = function (e)
    {
        var mouseXY = RGraph.getMouseXY(e);
        var mouseX  = mouseXY[0];
        var mouseY  = mouseXY[1];

        if (this.getObjectByXY(e)) {

            return {
                    0: this, 1: this.coords[0][0], 2: this.coords[0][1], 3: this.coords[0][2], 4: 0,
                    'object': this, 'x': this.coords[0][0], 'y': this.coords[0][1], 'radius': this.coords[0][2], 'index': 0, 'tooltip': this.properties['chart.tooltips'] ? this.properties['chart.tooltips'][0] : null
                   };
        }
        
        return null;
    }



    /**
    * This function positions a tooltip when it is displayed
    * 
    * @param obj object     The chart object
    * @param int x          The X coordinate specified for the tooltip
    * @param int y          The Y coordinate specified for the tooltip
    * @param object tooltip The tooltips DIV element
    * @param number idx     The index of the tooltip
    */
    RGraph.Drawing.Marker1.prototype.positionTooltip = function (obj, x, y, tooltip, idx)
    {
        var canvasXY   = RGraph.getCanvasXY(obj.canvas);
        var width      = tooltip.offsetWidth;
        var height     = tooltip.offsetHeight;

        // Set the top position
        tooltip.style.left = 0;
        tooltip.style.top  = canvasXY[1] + this.coords[0][1] - height - 7 + 'px';

        // By default any overflow is hidden
        tooltip.style.overflow = '';

        // The arrow
        var img = new Image();
            img.src = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAFCAYAAACjKgd3AAAARUlEQVQYV2NkQAN79+797+RkhC4M5+/bd47B2dmZEVkBCgcmgcsgbAaA9GA1BCSBbhAuA/AagmwQPgMIGgIzCD0M0AMMAEFVIAa6UQgcAAAAAElFTkSuQmCC';
            img.style.position = 'absolute';
            img.id = '__rgraph_tooltip_pointer__';
            img.style.top = (tooltip.offsetHeight - 2) + 'px';
        tooltip.appendChild(img);
        
        // Reposition the tooltip if at the edges:
        
        // LEFT edge
        if ((canvasXY[0] + obj.coords[0][0] + (obj.coords[0][2] / 2) - (width / 2)) < 10) {
            tooltip.style.left = canvasXY[0] + this.markerCenterx - (width * 0.1) + 'px';
            img.style.left = ((width * 0.1) - 8.5) + 'px';

        // RIGHT edge
        } else if ((canvasXY[0] + this.coords[0][0] + (this.coords[0][2] / 2) + (width / 2)) > document.body.offsetWidth) {
            tooltip.style.left = canvasXY[0] + this.markerCenterx - (width * 0.9) + 'px';
            img.style.left = ((width * 0.9) - 8.5) + 'px';

        // Default positioning - CENTERED
        } else {
            tooltip.style.left = (canvasXY[0] + this.markerCenterx - (width * 0.5)) + 'px';
            img.style.left = ((width * 0.5) - 8.5) + 'px';
        }
    }



    /**
    * Each object type has its own Highlight() function which highlights the appropriate shape
    * 
    * @param object shape The shape to highlight
    */
    RGraph.Drawing.Marker1.prototype.Highlight = function (shape)
    {
        this.context.beginPath();
            this.context.strokeStyle = this.properties['chart.highlight.stroke'];
            this.context.fillStyle = this.properties['chart.highlight.fill'];
            this.DrawMarker();
        this.context.closePath();
        this.context.fill();
        this.context.stroke();
    }



    /**
    * This function is used to encapsulate the actual drawing of the marker. It
    * intentional does not start a path or set colors.
    */
    RGraph.Drawing.Marker1.prototype.DrawMarker = function ()
    {
        var r = this.radius;
        
        if (this.properties['chart.align'] == 'left') {

            var x = this.markerCenterx = this.centerx - r - r - 3;
            var y = this.markerCentery = this.centery - r - r - 3;
    
            this.context.arc(x, y, this.radius, HALFPI, TWOPI, false);
            
           // special case for MSIE 7/8
            if (RGraph.isOld()) {
                this.context.moveTo(x + r + r, y+r+r);
                this.context.quadraticCurveTo(
                                  x + r,
                                  y + r,
                                  x + r + 1,
                                  y
                                 );
                this.context.moveTo(x + r + r, y+r+r);
            } else {
                this.context.quadraticCurveTo(
                                              x + r,
                                              y + r,
                                              x + r + r,
                                              y + r + r
                                             );
            }

            this.context.quadraticCurveTo(
                                          x + r,
                                          y + r,
                                          x,
                                          y + r + (RGraph.isOld() ? 1 : 0)
                                         );
        } else if (this.properties['chart.align'] == 'right') {
            var x = this.markerCenterx = this.centerx + r + r + 3;
            var y = this.markerCentery = this.centery - r - r - 3;
    
            this.context.arc(x, y, this.radius, HALFPI, PI, true);

           // special case for MSIE 7/8
            if (RGraph.isOld()) {
                this.context.moveTo(x - r - r, y+r+r);
                this.context.quadraticCurveTo(
                                  x - r,
                                  y + r,
                                  x - r - 1,
                                  y
                                 );
                this.context.moveTo(x - r - r, y+r+r);
            } else {
                this.context.quadraticCurveTo(
                                              x - r,
                                              y + r,
                                              x - r - r,
                                              y + r + r
                                             );
            }

            this.context.quadraticCurveTo(
                                          x - r,
                                          y + r,
                                          x,
                                          y + r + (RGraph.isOld() ? 1 : 0)
                                         );

        // Default is center
        } else {

            var x = this.markerCenterx = this.centerx;
            var y = this.markerCentery = this.centery - r - r - 3;

            this.context.arc(x, y, this.radius, HALFPI / 2, PI - (HALFPI / 2), true);
            
            // special case for MSIE 7/8
            if (RGraph.isOld()) {
                this.context.moveTo(x, y+r+r-2);
                this.context.quadraticCurveTo(
                                  x,
                                  y + r + (r / 4),
                                  x - (Math.cos(HALFPI / 2) * r),
                                  y + (Math.sin(HALFPI / 2) * r)
                                 );
                this.context.moveTo(x, y+r+r-2);
            } else {
                this.context.quadraticCurveTo(
                                  x,
                                  y + r + (r / 4),
                                  x,
                                  y + r + r - 2 // The two is so that the marker is not touching the point
                                 );
            }

            this.context.quadraticCurveTo(
                              x,
                              y + r + (r / 4),
                              x + (Math.cos(HALFPI / 2) * r),
                              y + (Math.sin(HALFPI / 2) * r)
                             );
        }

        this.coords[0] = [x, y, r];
    }