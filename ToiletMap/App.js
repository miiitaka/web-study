import React from 'react';
import { StyleSheet, Text, View, TouchableOpacity } from 'react-native';
import MapView from 'react-native-maps';
import { point } from '@turf/helpers';
import destination from '@turf/destination';
import { createAppContainer } from 'react-navigation';
import { createStackNavigator } from 'react-navigation-stack';

class MapScreen extends React.Component {
  static navigationOption = {
    title: 'トイレマップ'
  };
  
  constructor(props) {
    super(props);
    this.state = {
      elements: [],
      south: null,
      west: null,
      north: null,
      east: null
    };
  }
  
  onRegionChangeComplete = (region) => {
    const center = point([region.longitude, region.latitude]);
    const verticalMeter = 111 * region.latitudeDelta / 2;
    const horizontalMeter = 111 * region.longitudeDelta / 2;
    const options = {units: 'kilometers'};
    const south = destination(center, verticalMeter, 180, options);
    const west = destination(center, horizontalMeter, -90, options);
    const north = destination(center, verticalMeter, 0, options);
    const east = destination(center, horizontalMeter, 90, options);
    this.setState({
      south: south.geometry.coordinates[1],
      west: west.geometry.coordinates[0],
      north: north.geometry.coordinates[1],
      east: east.geometry.coordinates[0]
    });
  }
  
  fetchToilet = async () => {
    const south = this.state.south;
    const west = this.state.west;
    const north = this.state.north;
    const east = this.state.east;
    const body = `
      [out: json];
      (
        node
          [amenity=toilets]
          (${south},${west},${north},${east});
        node
          ["toilets:wheelchair"=yes]
          (${south},${west},${north},${east});
      );
      out;
    `;
    const options = {
      method: 'POST',
      body: body
    }
    
    try {
      const response = await fetch('https://overpass-api.de/api/interpreter', options);
      const json = await response.json();
      this.setState({elements: json.elements});
    } catch (e) {
      console.log(e);
    }
  };
  
  gotoElementScreen = (element, title) => {
    this.props.navigation.navigate('Element', {
      element: element,
      title: title
    });
  };
  
  render() {
    return (
      <View style={styles.container}>
        <MapView
          onRegionChangeComplete={this.onRegionChangeComplete}
          style={styles.mapview}
          initialRegion={{
            latitude: 35.681262,
            longitude: 139.766403,
            latitudeDelta: 0.00922,
            longitudeDelta: 0.00521
          }}
        >
          {
            this.state.elements.map((element) => {
              let title = "トイレ";
              if (element.tags["name"] !== undefined) {
                title = element.tags["name"];
              }
              return (<MapView.Marker
                coordinate={{
                  latitude: element.lat,
                  longitude: element.lon
                }}
                title={title}
                onCalloutPress={() => this.gotoElementScreen(element, title)}
                key={"id_" + element.id}
              />);
            })
          }
        </MapView>
        <View style={styles.buttonContainer}>
          <TouchableOpacity
            onPress={() => this.fetchToilet()}
            style={styles.button}
          >
            <Text style={styles.buttonItem}>トイレ取得</Text>
          </TouchableOpacity>
        </View>
      </View>
    );
  }
}

class ElementScreen extends React.Component {
  static navigationOption = ({navigation}) => {
    return {
      title: navigation.getParam('title', '')
    }
  }
  render() {
    const { navigation } = this.props;
    const element = navigation.getParam('element', undefined);
    if (element === undefined) {
      return (<View />);
    }
    return (
      <View>
        <Text>{element.id}</Text>
      </View>
    );
  }
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
    alignItems: 'center',
    justifyContent: 'flex-end',
  },
  mapview: {
    ...StyleSheet.absoluteFillObject
  },
  buttonContainer: {
    flexDirection: 'row',
    marginVertical: 20,
    backgroundColor: 'transparent',
    alignItems: 'center'
  },
  button: {
    width: 150,
    alignItems: 'center',
    justifyContent: 'center',
    backgroundColor: 'rgba(255,255,255,0.7)',
    paddingHorizontal: 18,
    paddingVertical: 12,
    borderRadius: 20
  },
  buttonItem: {
    textAlign: 'center'
  }
});

const RootStack = createStackNavigator(
  {
    Map: MapScreen,
    Element: ElementScreen
  },
  {
    initialRouteName: 'Map'
  }
);

const AppContainer = createAppContainer(RootStack);

export default class App extends React.Component {
  render() {
    return (
      <AppContainer ref={nav => {
        this.navigator=nav;
      }}/>
    );
  }
}