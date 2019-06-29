import React from "react";
import { Link, withRouter } from "react-router-dom";
import logo from "../logo.svg";

class HeaderComponent extends React.Component {
  render() {
    return (
      <header>
        <h1>
          <Link to="/">
            <img src={logo} width="100" height="100" alt="logo" />
          </Link>
        </h1>
        <nav>
          <ul>
            <li>
              <Link to="/mypage">MyPage</Link>
            </li>
            <li>
              <Link to="/login">ログイン</Link>
            </li>
          </ul>
        </nav>
      </header>
    );
  }
}

export default withRouter(HeaderComponent);