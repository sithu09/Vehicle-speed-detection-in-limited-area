import React, { Component } from 'react'
import * as firebase from 'firebase'
import '../css/Showpage.css'

export class Shortnovel extends Component {
    constructor(props) {
        super(props);
        this.state = {
             username: '',
             words:[]
             };
      }
      componentDidMount(){
        const wordRef=firebase.database().ref("React/Shortnovel/1H-1077");
        wordRef.on('value',(snapshot)=>{
            let words=snapshot.val();
            let newstate=[];
            for(let word in words){
                newstate.push({
                  link:words[word].link,
                    photo:words[word].photo,
                    proposal:words[word].proposal,
                    title:words[word].title
                });
            }
            this.setState({
                words:newstate
            });
        });
    }
      mySubmitHandler = (event) => {
        event.preventDefault();
          
        this.state.words.map((word)=>{
            alert("Search" + this.state.username + this.state.word.title)
               
        })
        
      }
      myChangeHandler = (event) => {
        this.setState({username: event.target.value});
      }
      render() {
        return (
          <form onSubmit={this.mySubmitHandler}>
          <h1>Plate Number: {this.state.username}</h1>
          <p style={{fontSize:"25px"}}>Enter Licnece Plate Number:</p>
          <input
            type='text'
            onChange={this.myChangeHandler}
          />
          <input
          style={{width:'100px',height:"20px"}}
            type='submit'
            value="Submit"
          />
         <div>
                 
                 {this.state.words.map((word)=>{
                     return(
                      <div >
                                       <div className="font"> 
                                           <p><b>Name - </b>{word.title}</p>
                                           <p ><b>Review - </b>{word.proposal}</p>
                                           <p ><b>Link - </b>{word.link}</p>
                                         <hr></hr>
                                           </div> 
                                      </div>
                     )
                 })}
          
              </div> 
          </form>
          
        );
      }
    }
export default Shortnovel
