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
  RichText,
  MediaUpload,
  MediaUploadCheck,
} from "@wordpress/block-editor";
import { Button, TextControl } from "@wordpress/components";

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
 * @return {Element} Element to render.
 */
export default function Edit({ attributes, setAttributes }) {
  const { Heading, description, mediaID, mediaURL } = attributes;

  const onChangeHeading = (newHeading) => {
    setAttributes({ Heading: newHeading });
  };
  const onChangeDescription = (newHeading) => {
    setAttributes({ description: newHeading });
  };
  const onSelectImage = (media) => {
    setAttributes({
      mediaURL: media.url,
      mediaID: media.id,
    });
  };
  const onRemovemedia = () => {
    setAttributes({
      mediaID: undefined,
    });
  };
  return (
    <>
      <section id="banner-description" {...useBlockProps()}>
        <div className="banner-description">
          <div className="banner-description__inner">
            <div className="row banner">
              <div className="col-lg-4 col-md-4 col-3 p-0">
                <div className="banner-description__inner_img">
                  <MediaUploadCheck>
                    <MediaUpload
                      onSelect={onSelectImage}
                      allowedTypes="image"
                      value={mediaID}
                      render={({ open }) => (
                        <button onClick={open}>
                          {!mediaID ? (
                            __("Upload Image")
                          ) : (
                            <img src={mediaURL} />
                          )}
                        </button>
                      )}
                    />
                  </MediaUploadCheck>
                  <MediaUploadCheck>
                    <Button onClick={onRemovemedia} isLink isDestructive>
                      {__("remove image", "post-media-selector")}
                    </Button>
                  </MediaUploadCheck>
                </div>
              </div>
              <div className="col-lg-8 col-md-8 col-8 p-0">
                <div className="banner-description__inner_heading">
                  <TextControl
                    tagName="h4"
                    value={Heading}
                    onChange={onChangeHeading}
                    placeholder={__("Enter banner text...", "walletup")}
                  />
                </div>
                <div className="banner-description__inner_description">
                  <RichText
                    tagName="p"
                    value={description}
                    onChange={onChangeDescription}
                    placeholder={__("Enter banner description...", "walletup")}
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </>
  );
}
