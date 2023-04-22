wp.blocks.registerBlockType("gutenbergreactblock/gutenbergblock",{
    title:"First & Last Name",
    icon: "smiley",
    category: "common",
    attributes:{
        fName: { type: "string"},
        lName: { type: "string"},
    },
    edit: function(props){
        function updateFName(event){
            props.setAttributes({fName: event.target.value})
        }
        function updateLName(event){
            props.setAttributes({lName: event.target.value})
        }
        return(
            <div>
                <input type="text" placeholder="First Name" value={props.attributes.fName} onChange={updateFName}/>
                <input type="text" placeholder="Last Name" value={props.attributes.lName} onChange={updateLName}/>
            </div>
        ) 
    },
    save: function(props){       
        return null
    },
   
})