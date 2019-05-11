import React, { Component } from 'react';

class Hello extends Component {
  constructor(props) {
    super(props);
  };
  render() {
    return (
      <div>こんにちは{this.props.name}さん</div>
    );
  }
}

export default Hello;
