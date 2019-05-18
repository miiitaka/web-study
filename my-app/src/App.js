import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';
import Hello from './Hello';

class App extends Component {
  render() {
    return (
      <div>
        <Hello name="田﨑" />
        <Hello name="宮脇" />
        <Hello name="岩田" />
        <Hello name="新原" />
      </div>
    );
  }
}

export default App;
