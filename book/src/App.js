import React from 'react';
import { HashRouter, Route, Switch } from "react-router-dom";
import './App.css';
import HeaderComponent from './components/HeaderComponent';
import FooterComponent from './components/FooterComponent';

function App() {
  return (
    <React.Fragment>
      <HashRouter>
        <Switch>
          <HeaderComponent />
          <main>メイン領域</main>
          <FooterComponent />
        </Switch>
      </HashRouter>
    </React.Fragment>
  );
}

export default App;