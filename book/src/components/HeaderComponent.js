import React from "react";
import { Link, withRouter } from "react-router-dom";
import logo from "../logo.svg";

class HeaderComponent extends React.Component {
  render() {
    return (
      <header>
        <h1>
          <a href="/">
            <img src={logo} width="100" height="100" alt="logo" />
          </a>
        </h1>
      </header>
    );
  }
}

export default withRouter(HeaderComponent);