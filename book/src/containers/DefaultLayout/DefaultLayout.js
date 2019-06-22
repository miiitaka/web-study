import React from "react";
import { Redirect, Route, Switch } from "react-router-dom";
import routes from "../../routes";
import DefaultHeader from "./DefaultHeader";
import DefaultFooter from "./DefaultFooter";

class DefaultLayout extends React.Component {
  render() {
    return (
      <React.Fragment>
        <DefaultHeader />
          <Switch>
            {
              routes.map((route, idx) => {
                return route.component ? (
                  <Route
                    key={idx}
                    path={route.path}
                    exact={route.exact}
                    name={route.name}
                  />
                ) : null;
              })
            }
            <Redirect from="/" to="/home" />
          </Switch>
        <DefaultFooter />
      </React.Fragment>
    );
  }
}

export default DefaultLayout;