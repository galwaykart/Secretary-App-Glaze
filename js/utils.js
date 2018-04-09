



var myConfig = {

 	type: "ring",
 	title: {
 	  text: "Attendence",
 	  
 	  "adjust-layout": true,
 	  fontColor: "#002653",
 	},
 	subtitle: {
 	  text: "View All Attendence Detail",
 	  "font-weight": "normal"
 	},
 	plot: {
 	  slice:'50%',
 	  borderWidth:0,
 	  backgroundColor:'#FBFCFE',
 	  animation:{
 	    effect:2,
 	    sequence:3
 	  },
 	  valueBox: [
 	    {
 	      type: 'all',
 	      text: '%t',
 	      placement: 'out'
 	    }, 
 	    {
 	      type: 'all',
 	      text: '%npv%',
 	      placement: 'in'
 	    }
 	  ]
 	},
  tooltip:{
 	    fontSize:16,
 	    anchor:'c',
 	    x:'50%',
 	    y:'50%',
 	    sticky:true,
 	    backgroundColor:'none',
 	    borderWidth:0,
 	    thousandsSeparator:',',
 	    text:''
    
  },
 	plotarea: {
 	  backgroundColor: 'transparent',
 	  borderWidth: 0,
 	  borderRadius: "0 0 0 10",
 	  margin: "70 0 10 0"
 	},
 	legend : {
    toggleAction:'remove',
    backgroundColor:'#FBFCFE',
    borderWidth:0,
    adjustLayout:true,
    align:'center',
    verticalAlign:'bottom',
    marker: {
        type:'circle',
        cursor:'pointer',
        borderWidth:0,
        size:5
    },
    item: {
        fontColor: "#777",
        cursor:'pointer',
        offsetX:-6,
        fontSize:12
    },
    mediaRules:[
        {
            maxWidth:500,
            visible:false
        }
    ]
 	},
 	scaleR:{
 	  refAngle:270
 	},
	series : [
		{
		    text: "Late Arrival",
			values : [106541],
			lineColor: "#00BAF2",
			backgroundColor: "#00BAF2",
			lineWidth: 1,
			marker: {
			  backgroundColor: '#00BAF2'
			}
		},
		{
		    text: "Mispunch",
			values : [56711],
			lineColor: "#E80C60",
			backgroundColor: "#E80C60",
			lineWidth: 1,
			marker: {
			  backgroundColor: '#E80C60'
			}
		},
		{
		  text: "Tour Gone",
			values : [43781],
			lineColor: "#9B26AF",
			backgroundColor: "#9B26AF",
			lineWidth: 1,
			marker: {
			  backgroundColor: '#9B26AF'
			}
		}
	]
};
 
zingchart.render({ 
	id : 'myChart2', 
  data: {
    gui:{
      contextMenu:{
        
        position: "right",
        backgroundColor:"", /*sets background for entire contextMenu*/
        docked: true, 
        item:{
          backgroundColor:"#306EAA",
          borderColor:"#306EAA",
          borderWidth: 0,
          fontFamily: "Lato",
          color:"#fff"
        }
      
      },
    },
    graphset: [myConfig]
  },
	
});