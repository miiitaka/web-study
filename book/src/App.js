import React from "react";
import { HashRouter, Route, Switch } from "react-router-dom";
import "./App.css";
import "./css/base.css";
import DefaultLayout from "./containers";

function App() {
  return (
    <React.Fragment>
      <HashRouter>
        <Switch>
          <Route path="/" name="home" component={DefaultLayout} />
        </Switch>
      </HashRouter>
    </React.Fragment>
  );
}

export default App;