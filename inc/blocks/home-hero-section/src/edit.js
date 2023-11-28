/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from "@wordpress/i18n";

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import {
  useBlockProps,
  InspectorControls,
} from "@wordpress/block-editor";
import { PanelBody, TextControl } from "@wordpress/components";

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import "./editor.scss";

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {WPElement} Element to render.
 */
export default function Edit(props) {
  const { attributes, setAttributes } = props;
  const { Heading, buttonURL } = attributes;

  const onChangeHeading = (newHeading) => {
    setAttributes({ Heading: newHeading });
  };

  return (
    <>
      <InspectorControls>
        <PanelBody title={__("Settings", "walletup")}>
          <TextControl
            label={__("Button URL")}
            value={buttonURL}
            onChange={(newURL) => setAttributes({ buttonURL: newURL })}
          />
        </PanelBody>
      </InspectorControls>

      <section id="home-hero" {...useBlockProps()}>
        <div className="home-hero">
          <div className="container p-0">
            <div className="home-hero__inner">
              <div className="row">
                <div className="col-12  ">
                  <div className="home-hero__inner_heading">
                    <TextControl
                      tagName="h1"
                      value={Heading}
                      onChange={onChangeHeading}
                      placeholder={__(
                        "Enter home-hero heading text...",
                        "walletup"
                      )}
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </>
  );
}
