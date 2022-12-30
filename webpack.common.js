const path = require('path');

module.exports = {
	entry: {
		Examples: {
			import: path.resolve(__dirname, 'index.js'),
			dependOn: ['Users', 'Site']
		}
	}
}
