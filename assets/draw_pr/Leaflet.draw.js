/**
 * Leaflet.draw assumes that you have already included the Leaflet library.
 */
L.drawVersion = '0.4.2';
/**
 * @class L.Draw
 * @aka Draw
 *
 *
 * To add the draw toolbar set the option drawControl: true in the map options.
 *
 * @example
 * ```js
 *      var map = L.map('map', {drawControl: true}).setView([51.505, -0.09], 13);
 *
 *      L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
 *          attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
 *      }).addTo(map);
 * ```
 *
 * ### Adding the edit toolbar
 * To use the edit toolbar you must initialise the Leaflet.draw control and manually add it to the map.
 *
 * ```js
 *      var map = L.map('map').setView([51.505, -0.09], 13);
 *
 *      L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
 *          attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
 *      }).addTo(map);
 *
 *      // FeatureGroup is to store editable layers
 *      var drawnItems = new L.FeatureGroup();
 *      map.addLayer(drawnItems);
 *
 *      var drawControl = new L.Control.Draw({
 *          edit: {
 *              featureGroup: drawnItems
 *          }
 *      });
 *      map.addControl(drawControl);
 * ```
 *
 * The key here is the featureGroup option. This tells the plugin which FeatureGroup contains the layers that
 * should be editable. The featureGroup can contain 0 or more features with geometry types Point, LineString, and Polygon.
 * Leaflet.draw does not work with multigeometry features such as MultiPoint, MultiLineString, MultiPolygon,
 * or GeometryCollection. If you need to add multigeometry features to the draw plugin, convert them to a
 * FeatureCollection of non-multigeometries (Points, LineStrings, or Polygons).
 */
L.Draw = {};

/**
 * @class L.drawLocal
 * @aka L.drawLocal
 *
 * The core toolbar class of the API — it is used to create the toolbar ui
 *
 * @example
 * ```js
 *      var modifiedDraw = L.drawLocal.extend({
 *          draw: {
 *              toolbar: {
 *                  buttons: {
 *                      polygon: 'Gambar sebuah Poligon'
 *                  }
 *              }
 *          }
 *      });
 * ```
 *
 * The default state for the control is the draw toolbar just below the zoom control.
 *  This will allow map users to draw vectors and markers.
 *  **Please note the edit toolbar is not enabled by default.**
 */
L.drawLocal = {
	// format: {
	// 	numeric: {
	// 		delimiters: {
	// 			thousands: ',',
	// 			decimal: '.'
	// 		}
	// 	}
	// },
	draw: {
		toolbar: {
			// #TODO: this should be reorganized where actions are nested in actions
			// ex: actions.undo  or actions.cancel
			actions: {
				title: 'Batal Menggambar',
				text: 'Batal'
			},
			finish: {
				title: 'Selasa Menggambar',
				text: 'Selesai'
			},
			undo: {
				title: 'Hapus titik terakhir di gambar',
				text: 'Hapus Titik Terakhir'
			},
			buttons: {
				polyline: 'Gambar sebuah garis',
				polygon: 'Gambar sebuah poligon',
				rectangle: 'Gambar sebuah segi empat',
				circle: 'Gambar sebuah lingkaran',
				marker: 'Gambar sebuah marker',
				circlemarker: 'Gambar lingkaran marker'
			}
		},
		handlers: {
			circle: {
				tooltip: {
					start: 'Klik dan drag untuk menggambar lingkaran.'
				},
				radius: 'Radius'
			},
			circlemarker: {
				tooltip: {
					start: 'Klik pada peta untuk meletakkan marker.'
				}
			},
			marker: {
				tooltip: {
					start: 'Klik pada peta untuk meletakkan marker.'
				}
			},
			polygon: {
				tooltip: {
					start: 'Klik untuk menggambar bangun.',
					cont: 'Klik untuk melanjutkan menggambar bangun.',
					end: 'Klik pada titik awal untuk menyelsaikan.'
				}
			},
			polyline: {
				error: '<strong>Error:</strong> shape edges cannot cross!',
				tooltip: {
					start: 'Klik untuk mulai menggambar garis.',
					cont: 'Klik untuk melanjutkan menggambar garis.',
					end: 'Klik titik terakhir untuk menyelesaikan garis.'
				}
			},
			rectangle: {
				tooltip: {
					start: 'Klik dan Drag untuk menggambar segi empat.'
				}
			},
			simpleshape: {
				tooltip: {
					end: 'Lepas mouse untuk menyelesaikan proses menggambar.'
				}
			}
		}
	},
	edit: {
		toolbar: {
			actions: {
				save: {
					title: 'Simpan Perubahan',
					text: 'Simpan'
				},
				cancel: {
					title: 'Batal merubah, Abaikan semua perubahan',
					text: 'Batal'
				},
				clearAll: {
					title: 'Bersihkan semua Layer',
					text: 'Bersihkan semua'
				}
			},
			buttons: {
				edit: 'Ubah semua layer',
				editDisabled: 'Tidak ada layer untuk dirubah',
				remove: 'Hapus Semua Layer',
				removeDisabled: 'Tidak ada layer untuk dihapus'
			}
		},
		handlers: {
			edit: {
				tooltip: {
					text: 'Drag dan tahan atau tandai untuk merubah feature.',
					subtext: 'Klik Batal untuk membatalkan perubahan.'
				}
			},
			remove: {
				tooltip: {
					text: 'Klik di feature untuk menghapus.'
				}
			}
		}
	}
};
