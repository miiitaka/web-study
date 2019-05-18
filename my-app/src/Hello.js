import React, { Component } from 'react';

class Hello extends Component {
  constructor(props) {
    super(props);
    this.state = {
      power: false,
      date: {
        year: '2019',
        month: '05',
        day: '18'
      }
    };
    this.submitHandler = this.submitHandler.bind(this);
  };
  submitHandler(e) {
    e.preventDefault();
    console.log(this.state);
    this.setState({
      power: true
    });
  }
  render() {
    return (
      <div>
        <p>こんにちは{this.props.name}さん</p>
        <form onSubmit={this.submitHandler}>
          <p>{this.state.power ? "ON" : "OFF"}</p>
          <button type="submit">Switch</button>
        </form>
      </div>
    );
  }
}

export default Hello;
